<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sidebar
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sidebar[] $children
 * @property-read \App\Models\Sidebar $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar root()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $icon 图标
 * @property string $uri uri
 * @property int $parent_id
 * @property int $sequence
 * @property int $status 状态
 * @property string $comment 备注
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar whereSequence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sidebar whereUri($value)
 */
class Sidebar extends Model
{
    use Traits\Sequenceable;

    protected $fillable = [
        'name',
        'uri',
        'icon',
        'parent_id',
        'comment',
    ];

    // protected $guarded = [
        // 'children',
    // ];

    const DATA = [
        [
            'name' => '内容管理',
            'uri' => '',
            'children' => [
                [
                    'name' => '文章列表',
                    'uri' => '/admin/articles',
                ], [
                    'name' => '备忘录',
                    'uri' => '/admin/notes',
                ]
            ]
        ],
    ];
    // const DATA = [
    //     [
    //         'name' => '内容管理',
    //         'uri' => '',
    //         'parent_id' => 0
    //     ], [
    //         'name' => '权限管理',
    //         'uri' => '',
    //         'parent_id' => 0,
    //     ], [
    //         'name' => '代码审计',
    //         'uri' => '/admin/reversions',
    //         'parent_id' => 0,
    //     ], [
    //         'name' => '页面管理',
    //         'uri' => '',
    //         'parent_id' => 0
    //     ], [
    //         'name' => '文章列表',
    //         'uri' => '/admin/articles',
    //         'parent_id' => 1
    //     ], [
    //         'name' => '用户列表',
    //         'uri' => '/admin/users',
    //         'parent_id' => 2,
    //     ], [
    //         'name' => '静态分析',
    //         'uri' => '/admin/reversions',
    //         'parent_id' => 3,
    //     ], [
    //         'name' => '菜单管理',
    //         'uri' => '/admin/sidebars',
    //         'parent_id' => 4,
    //     ]
    // ];

    public function scopeRoot($query)
    {
        return $query->where('parent_id', 0);
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'id', 'parent_id');
    }
}
