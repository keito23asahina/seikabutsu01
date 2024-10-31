{"filter":false,"title":"index.blade.php","tooltip":"/badmintonreservation/resources/views/posts/index.blade.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":38,"column":7},"end":{"row":38,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":24,"state":"start","mode":"ace/mode/php_laravel_blade"}},"hash":"2b3c1bc82bfdad081ea642cfd3f4496f84c7b84b","undoManager":{"mark":83,"position":83,"stack":[[{"start":{"row":0,"column":0},"end":{"row":53,"column":50},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <div class='post'>","                <h2 class='title'>Title</h2>","                <p class='body'>This is a sample body.</p>","            </div>","        </div>","    </body>","</html>","Copy","Bladeファイルの編集が終わったら、このBladeファイルを直接表示するためのルーティングを一時的に設定しましょう。","","web.php","Route::get('/', function() {","    return view('posts.index');","});","Copy","以降の動画や画像内で.(ドット)ではなく/(スラッシュ)でファイルの場所を指定していますが動作に違いはありません。公式では.(ドット)が推奨されています。","","ルーティングの設定が完了したら、アプリケーションを起動しましょう。","起動後、https://〜〜〜/にアクセスし、作成したViewが表示されることを確認しましょう。","","解説補足動画","※現在用意している動画は作成途中であったカリキュラムがベースで説明が進みますが、内容理解する上では問題ありません。","","","Viewファイルへのデータ埋め込み","上記ではルーティングで直接Viewファイルを指定していました。","次は、Controllerでデータを取得し、Controllerからデータを受け渡す形でViewを呼び出すようにしましょう。","先ほどのルーティング設定を以下のように変更しましょう。","","web.php","use Illuminate\\Support\\Facades\\Route;","use App\\Http\\Controllers\\PostController;      //追加","/*","|--------------------------------------------------------------------------","| Web Routes","|--------------------------------------------------------------------------","|","| Here is where you can register web routes for your application. These","| routes are loaded by the RouteServiceProvider within a group which","| contains the \"web\" middleware group. Now create something great!","|","*/","Route::get('/', [PostController::class, 'index']);"],"id":1}],[{"start":{"row":18,"column":0},"end":{"row":53,"column":50},"action":"remove","lines":["Copy","Bladeファイルの編集が終わったら、このBladeファイルを直接表示するためのルーティングを一時的に設定しましょう。","","web.php","Route::get('/', function() {","    return view('posts.index');","});","Copy","以降の動画や画像内で.(ドット)ではなく/(スラッシュ)でファイルの場所を指定していますが動作に違いはありません。公式では.(ドット)が推奨されています。","","ルーティングの設定が完了したら、アプリケーションを起動しましょう。","起動後、https://〜〜〜/にアクセスし、作成したViewが表示されることを確認しましょう。","","解説補足動画","※現在用意している動画は作成途中であったカリキュラムがベースで説明が進みますが、内容理解する上では問題ありません。","","","Viewファイルへのデータ埋め込み","上記ではルーティングで直接Viewファイルを指定していました。","次は、Controllerでデータを取得し、Controllerからデータを受け渡す形でViewを呼び出すようにしましょう。","先ほどのルーティング設定を以下のように変更しましょう。","","web.php","use Illuminate\\Support\\Facades\\Route;","use App\\Http\\Controllers\\PostController;      //追加","/*","|--------------------------------------------------------------------------","| Web Routes","|--------------------------------------------------------------------------","|","| Here is where you can register web routes for your application. These","| routes are loaded by the RouteServiceProvider within a group which","| contains the \"web\" middleware group. Now create something great!","|","*/","Route::get('/', [PostController::class, 'index']);"],"id":2},{"start":{"row":17,"column":7},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":1,"column":12},"end":{"row":1,"column":14},"action":"remove","lines":["ja"],"id":3}],[{"start":{"row":1,"column":12},"end":{"row":1,"column":58},"action":"insert","lines":["{{ str_replace('_', '-', app()->getLocale()) }"],"id":4}],[{"start":{"row":1,"column":58},"end":{"row":1,"column":59},"action":"insert","lines":["}"],"id":5}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "],"id":6},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":27},"end":{"row":11,"column":12},"action":"insert","lines":["","            "],"id":7}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":38},"action":"insert","lines":["@foreach ($posts as $post)"],"id":8}],[{"start":{"row":13,"column":38},"end":{"row":13,"column":43},"action":"remove","lines":["Title"],"id":9}],[{"start":{"row":13,"column":38},"end":{"row":13,"column":56},"action":"insert","lines":["{{ $post->title }}"],"id":10}],[{"start":{"row":14,"column":36},"end":{"row":14,"column":58},"action":"remove","lines":["This is a sample body."],"id":11}],[{"start":{"row":14,"column":36},"end":{"row":14,"column":53},"action":"insert","lines":["{{ $post->body }}"],"id":12}],[{"start":{"row":15,"column":22},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":16,"column":0},"end":{"row":16,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":16},"action":"remove","lines":["    "],"id":14}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":23},"action":"insert","lines":["@endforeach"],"id":15}],[{"start":{"row":13,"column":38},"end":{"row":14,"column":24},"action":"insert","lines":["","                        "],"id":16}],[{"start":{"row":14,"column":42},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":15,"column":0},"end":{"row":15,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":15,"column":20},"end":{"row":15,"column":24},"action":"remove","lines":["    "],"id":18}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["<"],"id":19},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["a"]}],[{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":[" "],"id":20},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["h"]}],[{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"remove","lines":["h"],"id":21},{"start":{"row":14,"column":27},"end":{"row":14,"column":31},"action":"insert","lines":["href"]}],[{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"insert","lines":["="],"id":22}],[{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"insert","lines":["'"],"id":23}],[{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"remove","lines":["'"],"id":24}],[{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"insert","lines":["/"],"id":25},{"start":{"row":14,"column":33},"end":{"row":14,"column":34},"action":"insert","lines":["p"]}],[{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"insert","lines":["o"],"id":26},{"start":{"row":14,"column":35},"end":{"row":14,"column":36},"action":"insert","lines":["s"]},{"start":{"row":14,"column":36},"end":{"row":14,"column":37},"action":"insert","lines":["t"]},{"start":{"row":14,"column":37},"end":{"row":14,"column":38},"action":"insert","lines":["s"]}],[{"start":{"row":14,"column":38},"end":{"row":14,"column":39},"action":"insert","lines":["/"],"id":27}],[{"start":{"row":14,"column":39},"end":{"row":14,"column":40},"action":"insert","lines":["{"],"id":28},{"start":{"row":14,"column":40},"end":{"row":14,"column":41},"action":"insert","lines":["{"]}],[{"start":{"row":14,"column":41},"end":{"row":14,"column":42},"action":"insert","lines":[" "],"id":29},{"start":{"row":14,"column":42},"end":{"row":14,"column":43},"action":"insert","lines":["$"]}],[{"start":{"row":14,"column":43},"end":{"row":14,"column":44},"action":"insert","lines":["p"],"id":30},{"start":{"row":14,"column":44},"end":{"row":14,"column":45},"action":"insert","lines":["o"]},{"start":{"row":14,"column":45},"end":{"row":14,"column":46},"action":"insert","lines":["s"]},{"start":{"row":14,"column":46},"end":{"row":14,"column":47},"action":"insert","lines":["t"]}],[{"start":{"row":14,"column":47},"end":{"row":14,"column":48},"action":"insert","lines":["-"],"id":31}],[{"start":{"row":14,"column":48},"end":{"row":14,"column":53},"action":"insert","lines":["></a>"],"id":32}],[{"start":{"row":14,"column":49},"end":{"row":14,"column":50},"action":"insert","lines":["i"],"id":33},{"start":{"row":14,"column":50},"end":{"row":14,"column":51},"action":"insert","lines":["d"]}],[{"start":{"row":14,"column":51},"end":{"row":14,"column":52},"action":"insert","lines":[" "],"id":34},{"start":{"row":14,"column":52},"end":{"row":14,"column":53},"action":"insert","lines":["}"]},{"start":{"row":14,"column":53},"end":{"row":14,"column":54},"action":"insert","lines":["}"]}],[{"start":{"row":14,"column":54},"end":{"row":14,"column":55},"action":"insert","lines":["\""],"id":35},{"start":{"row":14,"column":55},"end":{"row":14,"column":56},"action":"insert","lines":[">"]}],[{"start":{"row":14,"column":56},"end":{"row":14,"column":60},"action":"remove","lines":["</a>"],"id":36}],[{"start":{"row":14,"column":74},"end":{"row":14,"column":78},"action":"insert","lines":["</a>"],"id":37}],[{"start":{"row":3,"column":30},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":38},{"start":{"row":4,"column":0},"end":{"row":4,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":4,"column":8},"end":{"row":5,"column":51},"action":"insert","lines":["<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","    <title>{{ config('app.name', 'Blog') }}</title>"],"id":39}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":8},"action":"insert","lines":["    "],"id":40}],[{"start":{"row":6,"column":7},"end":{"row":6,"column":27},"action":"remove","lines":[" <title>Blog</title>"],"id":41},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":[" "]},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"remove","lines":[" "]},{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"remove","lines":[" "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"remove","lines":["    "]},{"start":{"row":5,"column":55},"end":{"row":6,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":7,"column":49},"end":{"row":7,"column":74},"action":"remove","lines":["css?family=Nunito:200,600"],"id":42}],[{"start":{"row":7,"column":49},"end":{"row":7,"column":97},"action":"insert","lines":["css2?family=Nunito:wght@400;600;700&display=swap"],"id":43}],[{"start":{"row":7,"column":116},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":44},{"start":{"row":8,"column":0},"end":{"row":8,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":8,"column":8},"end":{"row":19,"column":12},"action":"insert","lines":[" <!-- Styles -->","    <style>","        body {","            font-family: 'Nunito', sans-serif;","            padding: 20px;","        }","        .post {","            margin-bottom: 20px;","            padding: 10px;","            border: 1px solid #ddd;","        }","    </style>"],"id":45}],[{"start":{"row":22,"column":12},"end":{"row":22,"column":21},"action":"remove","lines":["Blog Name"],"id":46},{"start":{"row":22,"column":12},"end":{"row":22,"column":49},"action":"insert","lines":["{{ config('app.name', 'Blog Name') }}"]}],[{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"remove","lines":["h"],"id":47},{"start":{"row":24,"column":18},"end":{"row":24,"column":19},"action":"remove","lines":["c"]},{"start":{"row":24,"column":17},"end":{"row":24,"column":18},"action":"remove","lines":["a"]},{"start":{"row":24,"column":16},"end":{"row":24,"column":17},"action":"remove","lines":["e"]}],[{"start":{"row":24,"column":16},"end":{"row":24,"column":17},"action":"insert","lines":["e"],"id":48},{"start":{"row":24,"column":17},"end":{"row":24,"column":18},"action":"insert","lines":["l"]},{"start":{"row":24,"column":18},"end":{"row":24,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":24,"column":18},"end":{"row":24,"column":19},"action":"remove","lines":["e"],"id":49}],[{"start":{"row":24,"column":18},"end":{"row":24,"column":19},"action":"insert","lines":["s"],"id":50},{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"insert","lines":["e"]}],[{"start":{"row":27,"column":32},"end":{"row":27,"column":73},"action":"remove","lines":["/posts/{{ $post->id }}\">{{ $post->title }"],"id":51}],[{"start":{"row":27,"column":32},"end":{"row":27,"column":33},"action":"remove","lines":["}"],"id":52}],[{"start":{"row":27,"column":32},"end":{"row":27,"column":85},"action":"insert","lines":["\"{{ route('posts.show', $post) }}\">{{ $post->title }}"],"id":53}],[{"start":{"row":29,"column":36},"end":{"row":29,"column":52},"action":"remove","lines":["{{ $post->body }"],"id":54}],[{"start":{"row":29,"column":36},"end":{"row":29,"column":37},"action":"remove","lines":["}"],"id":55}],[{"start":{"row":29,"column":36},"end":{"row":29,"column":70},"action":"insert","lines":["{{ Str::limit($post->body, 100) }}"],"id":56}],[{"start":{"row":31,"column":22},"end":{"row":31,"column":23},"action":"remove","lines":["h"],"id":57},{"start":{"row":31,"column":21},"end":{"row":31,"column":22},"action":"remove","lines":["c"]},{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"remove","lines":["a"]},{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"remove","lines":["e"]},{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"remove","lines":["r"]},{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["o"]},{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"remove","lines":["f"]}],[{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"remove","lines":["d"],"id":58},{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"remove","lines":["n"]},{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"remove","lines":["e"]}],[{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"insert","lines":["e"],"id":59},{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"insert","lines":["n"]}],[{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"remove","lines":["n"],"id":60}],[{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"insert","lines":["m"],"id":61},{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"insert","lines":["p"]},{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"insert","lines":["t"]},{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"insert","lines":["y"]}],[{"start":{"row":31,"column":18},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":62},{"start":{"row":32,"column":0},"end":{"row":32,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":32,"column":12},"end":{"row":32,"column":16},"action":"insert","lines":["    "],"id":63}],[{"start":{"row":32,"column":16},"end":{"row":32,"column":17},"action":"insert","lines":["<"],"id":64},{"start":{"row":32,"column":17},"end":{"row":32,"column":18},"action":"insert","lines":["p"]}],[{"start":{"row":32,"column":18},"end":{"row":32,"column":23},"action":"insert","lines":["></p>"],"id":65}],[{"start":{"row":32,"column":19},"end":{"row":32,"column":30},"action":"insert","lines":["とうこうがありません。"],"id":66}],[{"start":{"row":32,"column":34},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":67},{"start":{"row":33,"column":0},"end":{"row":33,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":33,"column":12},"end":{"row":33,"column":16},"action":"remove","lines":["    "],"id":68}],[{"start":{"row":33,"column":12},"end":{"row":33,"column":13},"action":"insert","lines":["@"],"id":69},{"start":{"row":33,"column":13},"end":{"row":33,"column":14},"action":"insert","lines":["e"]},{"start":{"row":33,"column":14},"end":{"row":33,"column":15},"action":"insert","lines":["n"]},{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"insert","lines":["d"]}],[{"start":{"row":33,"column":16},"end":{"row":33,"column":17},"action":"insert","lines":["f"],"id":70},{"start":{"row":33,"column":17},"end":{"row":33,"column":18},"action":"insert","lines":["r"]}],[{"start":{"row":33,"column":17},"end":{"row":33,"column":18},"action":"remove","lines":["r"],"id":71}],[{"start":{"row":33,"column":17},"end":{"row":33,"column":18},"action":"insert","lines":["p"],"id":72},{"start":{"row":33,"column":18},"end":{"row":33,"column":19},"action":"insert","lines":["r"]},{"start":{"row":33,"column":19},"end":{"row":33,"column":20},"action":"insert","lines":["l"]},{"start":{"row":33,"column":20},"end":{"row":33,"column":21},"action":"insert","lines":["e"]}],[{"start":{"row":33,"column":20},"end":{"row":33,"column":21},"action":"remove","lines":["e"],"id":73}],[{"start":{"row":33,"column":20},"end":{"row":33,"column":21},"action":"insert","lines":["s"],"id":74},{"start":{"row":33,"column":21},"end":{"row":33,"column":22},"action":"insert","lines":["a"]}],[{"start":{"row":33,"column":21},"end":{"row":33,"column":22},"action":"remove","lines":["a"],"id":75}],[{"start":{"row":33,"column":21},"end":{"row":33,"column":22},"action":"insert","lines":["w"],"id":76}],[{"start":{"row":33,"column":21},"end":{"row":33,"column":22},"action":"remove","lines":["w"],"id":77}],[{"start":{"row":33,"column":21},"end":{"row":33,"column":22},"action":"insert","lines":["e"],"id":78}],[{"start":{"row":33,"column":17},"end":{"row":33,"column":18},"action":"remove","lines":["p"],"id":79}],[{"start":{"row":33,"column":17},"end":{"row":33,"column":18},"action":"insert","lines":["o"],"id":80}],[{"start":{"row":33,"column":19},"end":{"row":33,"column":20},"action":"insert","lines":["e"],"id":81}],[{"start":{"row":34,"column":14},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":82},{"start":{"row":35,"column":0},"end":{"row":35,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":35,"column":8},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":83},{"start":{"row":36,"column":0},"end":{"row":36,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":36,"column":8},"end":{"row":36,"column":29},"action":"insert","lines":["{{ $posts->links() }}"],"id":84}]]},"timestamp":1728541681639}