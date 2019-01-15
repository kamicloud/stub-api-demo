<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ArticleContent
 *
 * @property int $id
 * @property int $article_id
 * @property string $content 内容
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleContent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleContent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleContent query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleContent whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleContent whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleContent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleContent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ArticleContent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ArticleContent extends Model
{
    protected $fillable = [
        'content',
    ];
}
