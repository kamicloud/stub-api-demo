<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Role
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $code
 * @property string $name 名称
 * @property string $comment 备注
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereName($value)
 */
class Role extends Model
{
    const OWNER = 0;
    const IT = 1;
    const NORMAL = 2;

    const DATA = [
        [
            'code' => self::OWNER,
            'name' => '普通人',
            'comment' => '普通人'
        ], [
            'code' => self::NORMAL,
            'name' => '普通人',
            'comment' => '普通人'
        ],
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }

}
