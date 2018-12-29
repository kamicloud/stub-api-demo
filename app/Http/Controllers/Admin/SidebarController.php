<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Sidebar;

class SidebarController extends Controller
{
    public static function index()
    {
        $message = [
            'sidebars' => Sidebar::root()->orderBy('sequence')->with([
                'children' => function($table) {
                    $table->select([
                        '*',
                        'id as key',
                    ])->orderBy('sequence');
                },
                'children.children'
            ])->get(),
        ];
        return $message;
    }

    public static function create(Request $request)
    {
        $data = $request->all();
        $sidebar = DB::transaction(function() use ($data) {
            return Sidebar::create($data);
        });
        $message = [
            'sidebar' => $sidebar,
        ];
        return $message;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $sidebar = DB::transaction(function() use ($data) {
            return Sidebar::create($data)->load(
                [
                    'children',
                ]
            );
        });
        $message = [
            'sidebar' => $sidebar,
        ];
        return $message;
    }

    public function show(Request $request)
    {

    }

    public static function edit(Request $request)
    {
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'uri' => $request->uri,
            'parent_id' => $request->parent_id,
            'comment' => $request->comment,
        ];
        $sidebar = DB::transaction(function () use ($id, $data) {
            $sidebar = Sidebar::find($id);
            $sidebar->fill($data);
            $sidebar->save();
            return $sidebar;
        });
        $message = [
            'sidebar' => $sidebar,
        ];
        $sidebars = $this->index();
        $message['sidebars'] = $sidebars['sidebars'];
        return $message;
    }

    public function destroy(Request $request)
    {

    }
}
