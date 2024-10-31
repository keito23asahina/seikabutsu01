{"filter":false,"title":"2024_10_02_080201_create_group_users_table.php","tooltip":"/badmintonreservation/database/migrations/2024_10_02_080201_create_group_users_table.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":15,"column":14},"end":{"row":15,"column":33},"action":"remove","lines":["able->timestamps();"],"id":2},{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"remove","lines":["t"]},{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"remove","lines":["$"]}],[{"start":{"row":15,"column":12},"end":{"row":18,"column":65},"action":"insert","lines":["$table->foreignId('group_id')->constrained()->onDelete('cascade'); // グループ","            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // メンバー","            $table->timestamps();","            $table->unique(['group_id', 'user_id']); // 重複メンバーを防ぐ"],"id":3}],[{"start":{"row":14,"column":25},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":15,"column":0},"end":{"row":15,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":15,"column":12},"end":{"row":16,"column":48},"action":"insert","lines":["$table->string('name');","        $table->text('description')->nullable();"],"id":5}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":12},"action":"insert","lines":["    "],"id":6}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":52},"action":"remove","lines":["            $table->string('name');","            $table->text('description')->nullable();"],"id":7},{"start":{"row":14,"column":25},"end":{"row":15,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":60.59999999999996,"scrollleft":0,"selection":{"start":{"row":14,"column":25},"end":{"row":14,"column":25},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1728544042608,"hash":"e3bb1462e7655a31d55db8eb813f062cb68615c4"}