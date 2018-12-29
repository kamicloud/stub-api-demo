<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RolePermission
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RolePermission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RolePermission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RolePermission query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $role_id
 * @property int $permission_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RolePermission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RolePermission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RolePermission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RolePermission wherePermissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RolePermission whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RolePermission whereUpdatedAt($value)
 */
class RolePermission extends Model
{
    //
}
