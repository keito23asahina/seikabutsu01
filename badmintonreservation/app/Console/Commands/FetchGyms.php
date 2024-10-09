<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Gym;
use App\Models\Prefecture;
use Google_Client;
use Google_Service_Places;

class FetchGyms extends Command
{
    protected $signature = 'fetch:gyms';
    protected $description = 'Fetch gyms data from Google Places API';
    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Google APIクライアントの初期化
        $client = new Google_Client();
        $client->setApplicationName("Badminton Reservation");
        $client->setDeveloperKey(env('GOOGLE_PLACES_API_KEY'));

        // Google Places APIサービスの初期化
        $service = new Google_Service_Places($client);

        // すべての都道府県を取得
        $prefectures = Prefecture::all();
        
        foreach ($prefectures as $prefecture) {
            $this->info("Fetching gyms for {$prefecture->name}");
            
            $pageToken = null;
            do {
                // API検索パラメータの設定
                $optParams = [
                    'query' => $prefecture->name . ' 体育館', // 検索クエリ
                    'type' => 'gym', // 検索タイプ
                    'language' => 'ja', // 結果の言語
                ];
                if ($pageToken) {
                    $optParams['pageToken'] = $pageToken;
                }
                
                // Google Places APIを使用して体育館を検索
                $results = $service->places->textSearch($optParams);
                
                foreach ($results->getResults() as $place) {
                    // 体育館データをデータベースに追加または更新
                    $gym = Gym::updateOrCreate(
                        ['name' => $place->name, 'prefecture_id' => $prefecture->id],
                        [
                            'address' => $place->formatted_address,
                            'phone' => $place->forematted_phone_number ?? null,
                            // 営業時間上方がある場合はJSONとして保存、ない場合はnull
                            'opening_hours' => json_encode($place->opening_hours->weekday_text ?? null),
                            'reserve_way' => 'Please check with the facility', // デフォルトの予約方法
                            'reserve_link' => $place->website ?? null,
                        ]
                    );
                    
                    $this->info("Added/Updated gym: {$gym->name}");
                }
                
                
                // 次のページのトークンを取得（ページネーション用）
                $pageToken = $results->getNextPageToken();
            }　while ($pageToken); // 次のページがある限り繰り返す
        }
        
        $this->info('Gym data fetching completed.');
    }
}
