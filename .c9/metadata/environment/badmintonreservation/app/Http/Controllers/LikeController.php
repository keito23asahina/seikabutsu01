{"filter":false,"title":"LikeController.php","tooltip":"/badmintonreservation/app/Http/Controllers/LikeController.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":20},"action":"insert","lines":["use App\\Models\\Post;"],"id":3}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":["/"],"id":4},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":9,"column":4},"end":{"row":23,"column":5},"action":"insert","lines":["public function store(Post $post)","    {","        $post->likes()->create([","            'user_id' => auth()->id()","        ]);","","        return back();","    }","","    public function destroy(Post $post)","    {","        $post->likes()->where('user_id', auth()->id())->delete();","","        return back();","    }"],"id":5}]]},"ace":{"folds":[],"scrolltop":220.19999999999996,"scrollleft":0,"selection":{"start":{"row":23,"column":5},"end":{"row":23,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":13,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1728541007741,"hash":"0a11ad1cc6e1ec7229dc82736337fc1d380b7472"}