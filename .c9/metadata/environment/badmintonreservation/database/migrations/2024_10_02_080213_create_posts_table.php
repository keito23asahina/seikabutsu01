{"filter":false,"title":"2024_10_02_080213_create_posts_table.php","tooltip":"/badmintonreservation/database/migrations/2024_10_02_080213_create_posts_table.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":14,"column":25},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":15,"column":0},"end":{"row":15,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":12},"action":"remove","lines":["    "],"id":3},{"start":{"row":15,"column":4},"end":{"row":15,"column":8},"action":"remove","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"remove","lines":["    "]},{"start":{"row":14,"column":25},"end":{"row":15,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":14,"column":25},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":15,"column":0},"end":{"row":15,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":15,"column":12},"end":{"row":21,"column":66},"action":"insert","lines":["$table->foreignId('user_id')->constrained()->onDelete('cascade'); // 投稿者","            $table->foreignId('gym_id')->constrained()->onDelete('cascade'); // 体育館","            $table->string('title');","            $table->text('body');","            $table->timestamps(); // created_at, updated_at","            $table->softDeletes(); // deleted_at","            $table->timestamp('finished_at')->nullable(); // 投稿終了日"],"id":5}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":33},"action":"remove","lines":["            $table->timestamps();"],"id":6},{"start":{"row":21,"column":66},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":217,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":32,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":13,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1727862052161,"hash":"db96ff208bb047bfba7e5fc7633e3e612809ec6c"}