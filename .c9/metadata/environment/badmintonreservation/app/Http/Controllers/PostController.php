{"filter":false,"title":"PostController.php","tooltip":"/badmintonreservation/app/Http/Controllers/PostController.php","undoManager":{"mark":75,"position":75,"stack":[[{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":11,"column":0},"end":{"row":116,"column":187},"action":"insert","lines":["public function create()","{","    return view('posts.create');","}","","public function store(Request $request)","{","    $validatedData = $request->validate([","        'title' => 'required|max:255',","        'body' => 'required',","        'gym_id' => 'required|exists:gyms,id',","    ]);","","    $post = Post::create([","        'user_id' => auth()->id(),","        'gym_id' => $validatedData['gym_id'],","        'title' => $validatedData['title'],","        'body' => $validatedData['body'],","    ]);","","    return redirect()->route('posts.show', $post)->with('success', '投稿が作成されました。');","}","","ビューの作成:","resources/views/posts/create.blade.php を作成:","htmlCopy<x-app-layout>","    <x-slot name=\"header\">","        <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            {{ __('新規投稿') }}","        </h2>","    </x-slot>","","    <div class=\"py-12\">","        <div class=\"max-w-7xl mx-auto sm:px-6 lg:px-8\">","            <div class=\"bg-white overflow-hidden shadow-sm sm:rounded-lg\">","                <div class=\"p-6 bg-white border-b border-gray-200\">","                    <form method=\"POST\" action=\"{{ route('posts.store') }}\">","                        @csrf","                        <div class=\"mb-4\">","                            <label for=\"title\" class=\"block text-gray-700 text-sm font-bold mb-2\">タイトル:</label>","                            <input type=\"text\" name=\"title\" id=\"title\" class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline\" required>","                        </div>","                        <div class=\"mb-4\">","                            <label for=\"body\" class=\"block text-gray-700 text-sm font-bold mb-2\">本文:</label>","                            <textarea name=\"body\" id=\"body\" rows=\"4\" class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline\" required></textarea>","                        </div>","                        <div class=\"mb-4\">","                            <label for=\"gym_id\" class=\"block text-gray-700 text-sm font-bold mb-2\">体育館:</label>","                            <select name=\"gym_id\" id=\"gym_id\" class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline\" required>","                                @foreach($gyms as $gym)","                                    <option value=\"{{ $gym->id }}\">{{ $gym->name }}</option>","                                @endforeach","                            </select>","                        </div>","                        <div class=\"flex items-center justify-between\">","                            <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\">","                                投稿する","                            </button>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</x-app-layout>","","モデルの作成（まだ作成していない場合）:","Copyphp artisan make:model Post","","モデルの編集:","app/Models/Post.php を編集:","phpCopyprotected $fillable = ['user_id', 'gym_id', 'title', 'body'];","","public function user()","{","    return $this->belongsTo(User::class);","}","","public function gym()","{","    return $this->belongsTo(Gym::class);","}","","コントローラーでの体育館データの取得:","PostController.php の create メソッドを以下のように修正:","phpCopypublic function create()","{","    $gyms = Gym::all();","    return view('posts.create', compact('gyms'));","}","","ナビゲーションメニューに投稿作成リンクを追加:","resources/views/layouts/navigation.blade.php に以下を追加:","htmlCopy<x-nav-link :href=\"route('posts.create')\" :active=\"request()->routeIs('posts.create')\">","    {{ __('新規投稿') }}","</x-nav-link>","","","これらの手順を実行すると、基本的な投稿作成画面が完成します。ユーザーは認証後にこの画面にアクセスし、新しい投稿を作成できるようになります。","注意点：","","バリデーションルールやフィールドは、プロジェクトの要件に応じて調整してください。","セキュリティを考慮し、PostController の store メソッドでは必ず認証済みユーザーのIDを使用してください。","体育館の選択肢は、データベースに体育館データが存在することを前提としています。まだデータがない場合は、シーダーを作成してテストデータを挿入することをお勧めします。","","この基本的な実装をベースに、プロジェクトの要件に応じてさらなる機能やスタイリングを追加していくことができます。 CopyRetryClaude does not have the ability to run the code it generates yet.Claude can make mistakes. Please double-check responses."],"id":3}],[{"start":{"row":34,"column":0},"end":{"row":116,"column":187},"action":"remove","lines":["ビューの作成:","resources/views/posts/create.blade.php を作成:","htmlCopy<x-app-layout>","    <x-slot name=\"header\">","        <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            {{ __('新規投稿') }}","        </h2>","    </x-slot>","","    <div class=\"py-12\">","        <div class=\"max-w-7xl mx-auto sm:px-6 lg:px-8\">","            <div class=\"bg-white overflow-hidden shadow-sm sm:rounded-lg\">","                <div class=\"p-6 bg-white border-b border-gray-200\">","                    <form method=\"POST\" action=\"{{ route('posts.store') }}\">","                        @csrf","                        <div class=\"mb-4\">","                            <label for=\"title\" class=\"block text-gray-700 text-sm font-bold mb-2\">タイトル:</label>","                            <input type=\"text\" name=\"title\" id=\"title\" class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline\" required>","                        </div>","                        <div class=\"mb-4\">","                            <label for=\"body\" class=\"block text-gray-700 text-sm font-bold mb-2\">本文:</label>","                            <textarea name=\"body\" id=\"body\" rows=\"4\" class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline\" required></textarea>","                        </div>","                        <div class=\"mb-4\">","                            <label for=\"gym_id\" class=\"block text-gray-700 text-sm font-bold mb-2\">体育館:</label>","                            <select name=\"gym_id\" id=\"gym_id\" class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline\" required>","                                @foreach($gyms as $gym)","                                    <option value=\"{{ $gym->id }}\">{{ $gym->name }}</option>","                                @endforeach","                            </select>","                        </div>","                        <div class=\"flex items-center justify-between\">","                            <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\">","                                投稿する","                            </button>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</x-app-layout>","","モデルの作成（まだ作成していない場合）:","Copyphp artisan make:model Post","","モデルの編集:","app/Models/Post.php を編集:","phpCopyprotected $fillable = ['user_id', 'gym_id', 'title', 'body'];","","public function user()","{","    return $this->belongsTo(User::class);","}","","public function gym()","{","    return $this->belongsTo(Gym::class);","}","","コントローラーでの体育館データの取得:","PostController.php の create メソッドを以下のように修正:","phpCopypublic function create()","{","    $gyms = Gym::all();","    return view('posts.create', compact('gyms'));","}","","ナビゲーションメニューに投稿作成リンクを追加:","resources/views/layouts/navigation.blade.php に以下を追加:","htmlCopy<x-nav-link :href=\"route('posts.create')\" :active=\"request()->routeIs('posts.create')\">","    {{ __('新規投稿') }}","</x-nav-link>","","","これらの手順を実行すると、基本的な投稿作成画面が完成します。ユーザーは認証後にこの画面にアクセスし、新しい投稿を作成できるようになります。","注意点：","","バリデーションルールやフィールドは、プロジェクトの要件に応じて調整してください。","セキュリティを考慮し、PostController の store メソッドでは必ず認証済みユーザーのIDを使用してください。","体育館の選択肢は、データベースに体育館データが存在することを前提としています。まだデータがない場合は、シーダーを作成してテストデータを挿入することをお勧めします。","","この基本的な実装をベースに、プロジェクトの要件に応じてさらなる機能やスタイリングを追加していくことができます。 CopyRetryClaude does not have the ability to run the code it generates yet.Claude can make mistakes. Please double-check responses."],"id":4},{"start":{"row":33,"column":0},"end":{"row":34,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":13,"column":3},"end":{"row":13,"column":32},"action":"remove","lines":[" return view('posts.create');"],"id":5}],[{"start":{"row":13,"column":3},"end":{"row":13,"column":4},"action":"insert","lines":[" "],"id":6}],[{"start":{"row":13,"column":4},"end":{"row":14,"column":49},"action":"insert","lines":["$gyms = Gym::all();","    return view('posts.create', compact('gyms'));"],"id":7}],[{"start":{"row":11,"column":0},"end":{"row":33,"column":1},"action":"remove","lines":["public function create()","{","    $gyms = Gym::all();","    return view('posts.create', compact('gyms'));","}","","public function store(Request $request)","{","    $validatedData = $request->validate([","        'title' => 'required|max:255',","        'body' => 'required',","        'gym_id' => 'required|exists:gyms,id',","    ]);","","    $post = Post::create([","        'user_id' => auth()->id(),","        'gym_id' => $validatedData['gym_id'],","        'title' => $validatedData['title'],","        'body' => $validatedData['body'],","    ]);","","    return redirect()->route('posts.show', $post)->with('success', '投稿が作成されました。');","}"],"id":8}],[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"],"id":9},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":8,"column":4},"end":{"row":30,"column":1},"action":"insert","lines":["public function create()","{","    $gyms = Gym::all();","    return view('posts.create', compact('gyms'));","}","","public function store(Request $request)","{","    $validatedData = $request->validate([","        'title' => 'required|max:255',","        'body' => 'required',","        'gym_id' => 'required|exists:gyms,id',","    ]);","","    $post = Post::create([","        'user_id' => auth()->id(),","        'gym_id' => $validatedData['gym_id'],","        'title' => $validatedData['title'],","        'body' => $validatedData['body'],","    ]);","","    return redirect()->route('posts.show', $post)->with('success', '投稿が作成されました。');","}"],"id":10}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "],"id":11},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":4,"column":28},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"insert","lines":["u"]}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["s"],"id":13},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":[" "],"id":14}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["A"],"id":15},{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"insert","lines":["p"]},{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":["p"]}],[{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["\\"],"id":16},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["M"]},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["o"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["d"]},{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"insert","lines":["e"]},{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":["l"]}],[{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["s"],"id":17},{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"insert","lines":["\\"]}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["G"],"id":18},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["y"]}],[{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"insert","lines":["m"],"id":19}],[{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"insert","lines":[";"],"id":20}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":21},{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["u"]},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":["s"]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":[" "],"id":22},{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":["A"]}],[{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"insert","lines":["p"],"id":23},{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"insert","lines":["p"]}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":["\\"],"id":24},{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"insert","lines":["M"]},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"insert","lines":["o"]},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"insert","lines":["d"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":["l"],"id":25}],[{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["s"],"id":26},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["\\"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["P"]}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["o"],"id":27},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["s"]},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["t"]}],[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":[";"],"id":28}],[{"start":{"row":33,"column":1},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":29}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":1},"action":"insert","lines":["?"],"id":30},{"start":{"row":34,"column":1},"end":{"row":34,"column":2},"action":"insert","lines":["."]}],[{"start":{"row":34,"column":1},"end":{"row":34,"column":2},"action":"remove","lines":["."],"id":31}],[{"start":{"row":34,"column":1},"end":{"row":34,"column":2},"action":"insert","lines":[">"],"id":32}],[{"start":{"row":15,"column":4},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":33},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":4},"end":{"row":17,"column":0},"action":"insert","lines":["",""]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":4},"end":{"row":20,"column":5},"action":"insert","lines":["public function index(Post $post)","    {","        return view('posts.index')->with(['posts' => $post->get()]);  ","       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。","    }"],"id":34}],[{"start":{"row":18,"column":60},"end":{"row":18,"column":65},"action":"remove","lines":["get()"],"id":35}],[{"start":{"row":18,"column":60},"end":{"row":18,"column":72},"action":"insert","lines":["getByLimit()"],"id":36}],[{"start":{"row":21,"column":4},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":4},"end":{"row":23,"column":0},"action":"insert","lines":["",""]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":22,"column":4},"end":{"row":26,"column":1},"action":"insert","lines":["public function show(Post $post)","{","    return view('posts.show')->with(['post' => $post]);"," //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。","}"],"id":38}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "],"id":39},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":18,"column":8},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":40},{"start":{"row":19,"column":0},"end":{"row":19,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":67},"action":"insert","lines":["$posts = Post::with('user', 'gym')->latest()->paginate(10);"],"id":41}],[{"start":{"row":47,"column":1},"end":{"row":47,"column":2},"action":"remove","lines":[">"],"id":42}],[{"start":{"row":47,"column":1},"end":{"row":47,"column":2},"action":"insert","lines":[">"],"id":43}],[{"start":{"row":19,"column":58},"end":{"row":19,"column":60},"action":"insert","lines":["  "],"id":44}],[{"start":{"row":19,"column":59},"end":{"row":19,"column":60},"action":"remove","lines":[" "],"id":45},{"start":{"row":19,"column":58},"end":{"row":19,"column":59},"action":"remove","lines":[" "]}],[{"start":{"row":19,"column":58},"end":{"row":19,"column":59},"action":"insert","lines":["s"],"id":46}],[{"start":{"row":25,"column":56},"end":{"row":25,"column":57},"action":"insert","lines":["s"],"id":47}],[{"start":{"row":19,"column":8},"end":{"row":20,"column":67},"action":"remove","lines":["return view('posts.index')->with(['posts' => $posts->getByLimit()]);  ","       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。"],"id":48}],[{"start":{"row":19,"column":8},"end":{"row":19,"column":53},"action":"insert","lines":["return view('posts.index', compact('posts'));"],"id":49}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":19},"action":"remove","lines":["use App\\Models\\Gym;"],"id":50}],[{"start":{"row":5,"column":28},"end":{"row":6,"column":0},"action":"remove","lines":["",""],"id":51}],[{"start":{"row":4,"column":20},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":52}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":19},"action":"insert","lines":["use App\\Models\\Gym;"],"id":53}],[{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":54},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":55},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":13,"column":5},"action":"insert","lines":["public function __construct()","    {","        $this->middleware('auth')->except(['index', 'show']);","    }"],"id":56}],[{"start":{"row":29,"column":8},"end":{"row":30,"column":54},"action":"remove","lines":["return view('posts.show')->with(['post' => $posts]);","     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。"],"id":57},{"start":{"row":29,"column":4},"end":{"row":29,"column":8},"action":"remove","lines":["    "]}],[{"start":{"row":29,"column":4},"end":{"row":29,"column":47},"action":"insert","lines":["return view('posts.show', compact('post'));"],"id":58}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "],"id":59}],[{"start":{"row":50,"column":1},"end":{"row":50,"column":2},"action":"remove","lines":[">"],"id":60},{"start":{"row":50,"column":0},"end":{"row":50,"column":1},"action":"remove","lines":["?"]},{"start":{"row":49,"column":1},"end":{"row":50,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":48,"column":5},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":61},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":4},"end":{"row":50,"column":0},"action":"insert","lines":["",""]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":50,"column":4},"end":{"row":55,"column":1},"action":"insert","lines":["public function edit(Post $post)","{","    $this->authorize('update', $post);","    $gyms = Gym::all();","    return view('posts.edit', compact('post', 'gyms'));","}"],"id":62}],[{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "],"id":63},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":55,"column":5},"end":{"row":56,"column":0},"action":"insert","lines":["",""],"id":64},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":4},"end":{"row":57,"column":0},"action":"insert","lines":["",""]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":57,"column":4},"end":{"row":71,"column":0},"action":"insert","lines":["public function update(Request $request, Post $post)","{","    $this->authorize('update', $post);","    ","    $validatedData = $request->validate([","        'title' => 'required|max:255',","        'body' => 'required',","        'gym_id' => 'required|exists:gyms,id',","    ]);","","    $post->update($validatedData);","","    return redirect()->route('posts.show', $post)->with('success', '投稿が更新されました。');","}",""],"id":65}],[{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "],"id":66},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]},{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "]},{"start":{"row":61,"column":0},"end":{"row":61,"column":4},"action":"insert","lines":["    "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":4},"action":"insert","lines":["    "]},{"start":{"row":63,"column":0},"end":{"row":63,"column":4},"action":"insert","lines":["    "]},{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"insert","lines":["    "]},{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"insert","lines":["    "]},{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"insert","lines":["    "]},{"start":{"row":67,"column":0},"end":{"row":67,"column":4},"action":"insert","lines":["    "]},{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "]},{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"insert","lines":["    "]},{"start":{"row":70,"column":0},"end":{"row":70,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":70,"column":5},"end":{"row":71,"column":0},"action":"insert","lines":["",""],"id":67},{"start":{"row":71,"column":0},"end":{"row":71,"column":4},"action":"insert","lines":["    "]},{"start":{"row":71,"column":4},"end":{"row":72,"column":0},"action":"insert","lines":["",""]},{"start":{"row":72,"column":0},"end":{"row":72,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":72,"column":4},"end":{"row":79,"column":1},"action":"insert","lines":["public function destroy(Post $post)","{","    $this->authorize('delete', $post);","    ","    $post->delete();","","    return redirect()->route('posts.index')->with('success', '投稿が削除されました。');","}"],"id":68}],[{"start":{"row":73,"column":0},"end":{"row":73,"column":4},"action":"insert","lines":["    "],"id":69},{"start":{"row":74,"column":0},"end":{"row":74,"column":4},"action":"insert","lines":["    "]},{"start":{"row":75,"column":0},"end":{"row":75,"column":4},"action":"insert","lines":["    "]},{"start":{"row":76,"column":0},"end":{"row":76,"column":4},"action":"insert","lines":["    "]},{"start":{"row":77,"column":0},"end":{"row":77,"column":4},"action":"insert","lines":["    "]},{"start":{"row":78,"column":0},"end":{"row":78,"column":4},"action":"insert","lines":["    "]},{"start":{"row":79,"column":0},"end":{"row":79,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":5},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":70},{"start":{"row":17,"column":0},"end":{"row":17,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["d"],"id":71},{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["d"]}],[{"start":{"row":17,"column":10},"end":{"row":17,"column":12},"action":"insert","lines":["()"],"id":72}],[{"start":{"row":17,"column":11},"end":{"row":17,"column":13},"action":"insert","lines":["\"\""],"id":73}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":["t"],"id":74},{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"insert","lines":["e"]},{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"insert","lines":["s"]},{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"insert","lines":["t"]}],[{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":[";"],"id":75}],[{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"remove","lines":[";"],"id":76},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"remove","lines":[")"]},{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"remove","lines":["\""]},{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"remove","lines":["t"]},{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"remove","lines":["s"]},{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"remove","lines":["e"]},{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"remove","lines":["t"]},{"start":{"row":17,"column":11},"end":{"row":17,"column":12},"action":"remove","lines":["\""]},{"start":{"row":17,"column":10},"end":{"row":17,"column":11},"action":"remove","lines":["("]},{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"remove","lines":["d"]},{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"remove","lines":["d"]},{"start":{"row":17,"column":4},"end":{"row":17,"column":8},"action":"remove","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":16,"column":5},"end":{"row":17,"column":0},"action":"remove","lines":["",""],"id":77}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":5},"end":{"row":16,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1728549332407,"hash":"9b734b89955ce214f0bdf754a4f3c48daaa8b26d"}