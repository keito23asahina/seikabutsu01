{"filter":false,"title":"Message.php","tooltip":"/badmintonreservation/app/Models/Message.php","undoManager":{"mark":15,"position":15,"stack":[[{"start":{"row":9,"column":19},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":21,"column":5},"action":"insert","lines":["protected $fillable = ['group_id', 'user_id', 'message'];","","    public function group()","    {","        return $this->belongsTo(Group::class);","    }","","    public function user()","    {","        return $this->belongsTo(User::class);","    }"],"id":3}],[{"start":{"row":11,"column":28},"end":{"row":11,"column":36},"action":"remove","lines":["group_id"],"id":4},{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"insert","lines":["c"]},{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"insert","lines":["o"]},{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"insert","lines":["n"]},{"start":{"row":11,"column":31},"end":{"row":11,"column":32},"action":"insert","lines":["t"]},{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["e"]},{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["n"]},{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["t"]}],[{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"remove","lines":["r"],"id":5},{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"remove","lines":["e"]},{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"remove","lines":["s"]},{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"remove","lines":["u"]}],[{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"insert","lines":["g"],"id":6},{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"insert","lines":["r"]},{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"insert","lines":["o"]},{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"insert","lines":["u"]},{"start":{"row":11,"column":43},"end":{"row":11,"column":44},"action":"insert","lines":["p"]}],[{"start":{"row":11,"column":57},"end":{"row":11,"column":58},"action":"remove","lines":["e"],"id":7},{"start":{"row":11,"column":56},"end":{"row":11,"column":57},"action":"remove","lines":["g"]},{"start":{"row":11,"column":55},"end":{"row":11,"column":56},"action":"remove","lines":["a"]},{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"remove","lines":["s"]},{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"remove","lines":["s"]},{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"remove","lines":["e"]},{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"remove","lines":["m"]}],[{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"insert","lines":["u"],"id":8},{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"insert","lines":["s"]},{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"insert","lines":["e"]},{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"insert","lines":["r"]},{"start":{"row":11,"column":55},"end":{"row":11,"column":56},"action":"insert","lines":["_"]}],[{"start":{"row":11,"column":56},"end":{"row":11,"column":57},"action":"insert","lines":["i"],"id":9},{"start":{"row":11,"column":57},"end":{"row":11,"column":58},"action":"insert","lines":["d"]}],[{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"remove","lines":["r"],"id":10},{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"remove","lines":["e"]},{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"remove","lines":["s"]},{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"remove","lines":["u"]}],[{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"insert","lines":["g"],"id":11},{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"insert","lines":["r"]},{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"insert","lines":["o"]},{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"insert","lines":["u"]},{"start":{"row":11,"column":55},"end":{"row":11,"column":56},"action":"insert","lines":["p"]}],[{"start":{"row":11,"column":43},"end":{"row":11,"column":44},"action":"remove","lines":["p"],"id":12},{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"remove","lines":["u"]},{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"remove","lines":["o"]},{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"remove","lines":["r"]},{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"remove","lines":["g"]}],[{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"insert","lines":["u"],"id":13},{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"insert","lines":["s"]},{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"insert","lines":["e"]},{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"insert","lines":["r"]}],[{"start":{"row":13,"column":4},"end":{"row":17,"column":0},"action":"remove","lines":["public function group()","    {","        return $this->belongsTo(Group::class);","    }",""],"id":14}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "],"id":15},{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":16,"column":5},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":16},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":4},"end":{"row":18,"column":0},"action":"insert","lines":["",""]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":18,"column":4},"end":{"row":22,"column":0},"action":"insert","lines":["public function group()","    {","        return $this->belongsTo(Group::class);","    }",""],"id":17}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":22,"column":0},"end":{"row":22,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1728546746541,"hash":"bebe3ef6e621084e4852baa0b39c2884738e7cfd"}