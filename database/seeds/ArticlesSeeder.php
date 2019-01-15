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
            $article = Article::create([
                'title' => str_random(20),
                'user_id' => 1,
                'status' => 1,
            ]);
            $article->articleContent()->create([
                'content' => str_random(2000),
            ]);
            ArticleComment::create([
                'content' => 'bbb' . $i,
                'article_id' => $i,
                'user_id' => 1,
                'status' => 1,
            ]);
        };
    }
}
