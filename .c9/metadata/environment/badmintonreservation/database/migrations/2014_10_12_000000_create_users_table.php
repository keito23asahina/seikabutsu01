{"filter":false,"title":"2014_10_12_000000_create_users_table.php","tooltip":"/badmintonreservation/database/migrations/2014_10_12_000000_create_users_table.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":17,"column":1},"end":{"row":20,"column":33},"action":"remove","lines":["           $table->timestamp('email_verified_at')->nullable();","            $table->string('password');","            $table->rememberToken();","            $table->timestamps();"],"id":2},{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":16,"column":46},"end":{"row":17,"column":0},"action":"remove","lines":["",""],"id":3}],[{"start":{"row":16,"column":46},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":0},"end":{"row":24,"column":59},"action":"insert","lines":["            $table->timestamp('email_verified_at')->nullable(); // email認証","            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // 性別","            $table->unsignedTinyInteger('age')->nullable(); // 年齢","            $table->string('password');","            $table->text('introduction')->nullable(); // 自己紹介","            $table->string('image_url')->nullable(); // プロフィール画像url","            $table->rememberToken(); // ログイン状態保存","            $table->timestamps(); // created_at, updated_at"],"id":5}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":24,"column":59},"end":{"row":24,"column":59},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1727856406093,"hash":"fb44ac2c27b9ef0c444359e51caedfa828f87976"}