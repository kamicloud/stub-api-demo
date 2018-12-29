<?php
namespace App\Managers;

use App\Models\Sidebar;

class SidebarManager
{
    public static function all()
    {
        return Sidebar::where('parent_id', 0)->orderBy('sequence')->with([
            'children' => function($table) {
                $table->select([
                    '*',
                    'id as key',
                ])->orderBy('sequence');
            },
            'children.children'
        ])->get();
    }

    public static function create(array $data)
    {
        return Sidebar::create([
            'name' => !empty($data['name']) ? $data['name'] : '',
            'icon' => !empty($data['icon']) ? $data['icon'] : '',
            'uri' => !empty($data['uri']) ? $data['uri'] : '',
            'parent_id' => !empty($data['parent_id']) ? $data['parent_id'] : 0,
            'sequence' => !empty($data['sequence']) ? $data['sequence'] : 0,
            'comment' => empty($data['comment']) ? '' : $data['comment'],
        ]);
    }
}
