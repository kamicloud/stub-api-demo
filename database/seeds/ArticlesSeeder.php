<?php

use Illuminate\Database\Seeder;
use App\Models\{
    Article,
    ArticleComment
};

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        while ($i < 20) {
            $i++;
            Article::create([
                'title' => 'aaa' . $i,
                'content' => 'bbb' . $i,
                'user_id' => 1,
                'status' => 1,
            ]);
            ArticleComment::create([
                'title' => 'aaa' . $i,
                'content' => 'bbb' . $i,
                'article_id' => $i,
                'user_id' => 1,
                'status' => 1,
            ]);
        };
    }
}
