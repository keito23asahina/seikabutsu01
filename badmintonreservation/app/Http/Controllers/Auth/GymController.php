<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Places;

class GymController extends Controller
{
    public function searchGyms(Request $request)
    {
        $term = $request->input('term'); // 入力された検索キーワード
        $municipalityId = $request->input('municipality_id'); // 選択された市区町村

        $client = new Google_Client();
        $client->setApplicationName("YourAppName");
        $client->setDeveloperKey(env('GOOGLE_PLACES_API_KEY'));

        $service = new Google_Service_Places($client);

        // APIリクエストの作成
        $query = "{$municipalityId} 体育館 {$term}";
        $results = $service->textSearch([
            'query' => $query,
            'language' => 'ja',
        ]);

        $gyms = [];
        foreach ($results->getResults() as $place) {
            $gyms[] = [
                'name' => $place->name,
                'address' => $place->formatted_address,
                'place_id' => $place->place_id,
            ];
        }

        return response()->json($gyms);
    }
}
