{"filter":false,"title":"2024_10_02_080040_create_likes_table.php","tooltip":"/badmintonreservation/database/migrations/2024_10_02_080040_create_likes_table.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":14,"column":25},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":15,"column":0},"end":{"row":15,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":15,"column":12},"end":{"row":18,"column":63},"action":"insert","lines":["$table->foreignId('user_id')->constrained()->onDelete('cascade'); // いいねしたユーザー","            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // いいね対象の投稿","            $table->timestamps();","            $table->unique(['user_id', 'post_id']); // 重複いいねを防ぐ"],"id":3}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":33},"action":"remove","lines":["            $table->timestamps();"],"id":4},{"start":{"row":18,"column":63},"end":{"row":19,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":63},"end":{"row":18,"column":63},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1727856612913,"hash":"1449bf83ff8ae7bd97993f500eeb3a5e49b53c86"}