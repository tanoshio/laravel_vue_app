<?php
// マイグレーションで DB のテーブルを作成したらテストでサンプルデータをいれてみます。これをシーダーと言います。

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'スッキリわかるJava入門 第3版',
            'author' => '中山 清喬',
            'publisher' => 'インプレス',
            'ISBN' => '978-4295007807',
            'summary' => '発売から8年であっという間に総計40万部到達した大人気シリーズの原点。
            「どうして? 」「なぜそうなる? 」が必ずわかるJava入門書史上最強の定番書!
            読みやすさ、使いやすさをさらに磨いた増補改訂版登場!',
            'genre' => 'Java',
            'available' => true,
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '独習JavaScript 新版',
            'author' => 'CodeMafia 外村 将大',
            'publisher' => '翔泳社',
            'ISBN' => '978-4798160276',
            'summary' => 'JavaScript“標準教科書"が人気講師の書き下ろしで新登場!
            初心者から経験者まで。上達するために
            「押さえておきたい基礎知識」総ざらい',
            'genre' => 'JavaScript',
            'available' => true,
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'キタミ式イラストIT塾 基本情報技術者 令和04年',
            'author' => 'きたみ りゅうじ',
            'publisher' => '技術評論社',
            'ISBN' => '978-4297124519',
            'summary' => '絵解きでわかるキタミ式',
            'genre' => '基本情報',
            'available' => true,
        ];
        DB::table('books')->insert($param);
    }
}