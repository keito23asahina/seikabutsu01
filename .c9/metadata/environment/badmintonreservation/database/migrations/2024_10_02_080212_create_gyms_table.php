{"filter":false,"title":"2024_10_02_080212_create_gyms_table.php","tooltip":"/badmintonreservation/database/migrations/2024_10_02_080212_create_gyms_table.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":22,"column":69},"end":{"row":22,"column":69},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"cfebd167174888eed7538ae2f7fc3081b1002811","mime":"application/octet-stream","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":14,"column":25},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":15,"column":0},"end":{"row":15,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":15,"column":12},"end":{"row":22,"column":69},"action":"insert","lines":["$table->foreignId('prefecture_id')->constrained(); // 都道府県","            $table->string('name'); // 体育館名","            $table->string('address'); // 住所","            $table->string('phone')->nullable(); // 電話番号","            $table->string('email')->nullable(); // メールアドレス","            $table->string('opening_hours')->nullable(); // 開館時間","            $table->string('reserve_way')->nullable(); // 簡潔な予約方法説明","            $table->string('reserve_link')->nullable(); // 予約ページへのリンク"],"id":3}]]},"timestamp":1727862052171}