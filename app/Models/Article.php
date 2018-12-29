<?php
/**
 * Test
 *
 * PHP version 5
 *
 * @category A
 * @package  ArrayObjecta
 * @author   Display Name <username@example.com>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence MIT
 * @link     http://www.baidu.com
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Test
 *
 * @category A
 * @package ArrayObjecta
 * @author Display Name <username@example.com>
 * @license http://matrix.squiz.net/developer/tools/php_cs/licence MIT
 * @link http://www.baidu.com
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ArticleComment[] $comments
 * @property-read \App\Models\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Article onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Article withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Article withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $user_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereUserId($value)
 */
class Article extends Model
{
    use SoftDeletes;

    const TEST = 3;

    protected $dates = ['deleted_at'];

    protected $hidden = [];

    protected $fillable = [
        // 'id',
    ];

    /**
     * 文章作者
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * [comments description]
     */
    public function comments()
    {
        return $this->hasMany(ArticleComment::class);
    }
}
