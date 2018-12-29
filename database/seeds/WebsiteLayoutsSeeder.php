<?php

use Illuminate\Database\Seeder;
use App\Managers\{
    SidebarManager
};

class WebsiteLayoutsSeeder extends Seeder
{
    const SIDEBARS = [
        [
            'name' => '内容管理',
            'icon' => 'desktop',
            'children' => [
                [
                    'name' => '文章列表',
                    'uri' => '/admin/articles',
                ], [
                    'name' => '备忘录',
                    'uri' => '/admin/notes',
                ]
            ],
        ], [
            'name' => '权限管理',
            'icon' => 'user',
            'children' => [
                [
                    'name' => '用户列表',
                    'uri' => '/admin/users',
                ], [
                    'name' => '角色列表',
                    'uri' => '/admin/roles',
                ], [
                    'name' => '权限列表',
                    'uri' => '/admin/rights',
                ],
            ]
        ], [
            'name' => '代码审计',
            'icon' => 'setting',
            'children' => [
                [
                    'name' => '静态分析',
                    'uri' => '/admin/reversions',
                ], [
                    'name' => '代码图表',
                    'uri' => '/admin/reversions/figures',
                ]
            ]
        ], [
            'name' => '页面管理',
            'icon' => 'layout',
            'children' => [
                [
                    'name' => '菜单列表',
                    'uri' => '/admin/sidebars',
                ], [
                    'name' => '页面布局',
                    'uri' => '/admin/layouts',
                ],
            ],
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = self::SIDEBARS;
        foreach($data as $key => $value) {
            $sidebar = SidebarManager::create($value);
            if (isset($value['children']))
            foreach ($value['children'] as $key2 => $child) {
                $childSidebar = SidebarManager::create($child);
                $sidebar->children()->save($childSidebar);
            }
        }
        // Sidebar::
        // Sidebar::insert($data);
    }
}
