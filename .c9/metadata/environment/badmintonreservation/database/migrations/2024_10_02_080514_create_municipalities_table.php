{"filter":false,"title":"2024_10_02_080514_create_municipalities_table.php","tooltip":"/badmintonreservation/database/migrations/2024_10_02_080514_create_municipalities_table.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":14,"column":25},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":15,"column":0},"end":{"row":15,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":15,"column":12},"end":{"row":18,"column":69},"action":"insert","lines":["$table->foreignId('prefecture_id')->constrained()->onDelete('cascade'); // 都道府県","            $table->string('name'); // 市区町村名","            $table->string('reserve_way')->nullable(); // 簡単な予約方法説明","            $table->string('reserve_link')->nullable(); // 予約ページへのリンク"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":69},"end":{"row":18,"column":69},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1727856802852,"hash":"da724d50f0c8f4fdd4000ec7a7df270fbbe90793"}