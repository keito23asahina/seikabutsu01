{"filter":false,"title":"PrefecturesTableSeeder.php","tooltip":"/badmintonreservation/database/seeders/PrefecturesTableSeeder.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":17,"column":0},"action":"remove","lines":["<?php","","namespace Database\\Seeders;","","use Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents;","use Illuminate\\Database\\Seeder;","","class PrefecturesTableSeeder extends Seeder","{","    /**","     * Run the database seeds.","     */","    public function run(): void","    {","        //","    }","}",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":28,"column":1},"action":"insert","lines":["<?php","","namespace Database\\Seeders;","","use Illuminate\\Database\\Seeder;","use App\\Models\\Prefecture;","","class PrefecturesTableSeeder extends Seeder","{","    public function run()","    {","        $prefectures = [","            '北海道', '青森県', '岩手県', '宮城県', '秋田県',","            '山形県', '福島県', '茨城県', '栃木県', '群馬県',","            '埼玉県', '千葉県', '東京都', '神奈川県', '新潟県',","            '富山県', '石川県', '福井県', '山梨県', '長野県',","            '岐阜県', '静岡県', '愛知県', '三重県', '滋賀県',","            '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県',","            '鳥取県', '島根県', '岡山県', '広島県', '山口県',","            '徳島県', '香川県', '愛媛県', '高知県', '福岡県',","            '佐賀県', '長崎県', '熊本県', '大分県', '宮崎県',","            '鹿児島県', '沖縄県'","        ];","","        foreach ($prefectures as $prefecture) {","            Prefecture::create(['name' => $prefecture]);","        }","    }","}"],"id":3}]]},"ace":{"folds":[],"scrolltop":73,"scrollleft":0,"selection":{"start":{"row":28,"column":1},"end":{"row":28,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1727859414267,"hash":"77672d162d807e5715c6a1cb945d3ec89d34d467"}