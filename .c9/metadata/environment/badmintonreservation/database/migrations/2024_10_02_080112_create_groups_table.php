{"filter":false,"title":"2024_10_02_080112_create_groups_table.php","tooltip":"/badmintonreservation/database/migrations/2024_10_02_080112_create_groups_table.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":14,"column":25},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":15,"column":0},"end":{"row":15,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":44},"action":"insert","lines":["$table->string('name'); // グループ名"],"id":3}],[{"start":{"row":15,"column":44},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":16,"column":0},"end":{"row":16,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":16,"column":12},"end":{"row":18,"column":83},"action":"insert","lines":["$table->text('description')->nullable();","        $table->foreignId('post_id')->constrained()->onDelete('cascade');","        $table->foreignId('creator_id')->constrained('users')->onDelete('cascade');"],"id":5}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":83},"end":{"row":18,"column":83},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1728544006989,"hash":"7376f20af82cad8eb08a657f91cfcb2223de4013"}