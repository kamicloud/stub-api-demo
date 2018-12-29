<?php

use Illuminate\Database\Seeder;

class ReversionIgnoresSeeder extends Seeder
{
    const DATA = [
        // [
        //     'pattern' => 'Access to an undefined property Illuminate\\Http\\Request::\$\w+',
        // ], [
        //     'pattern' => 'Call to an undefined static method App\\Models\\\w+::where\(\)',
        // ], [
        //     'pattern' => 'Call to an undefined static method App\\Models\\\w+::where\(\)'
        // ], [
        //     'pattern' => 'Call to static method transaction\(\) on an unknown class DB'
        // ], [
        //     'pattern' => 'Call to an undefined static method App\\Models\\\w+::create\(\)'
        // ], [
        //     'pattern' => 'Call to an undefined static method App\\Models\\\w+::find\(\)'
        // ], [
        //     'pattern' => 'Call to an undefined static method App\\Models\\\w+::firstOrNew\(\)'
        // ], [
        //     'pattern' => 'Call to an undefined static method App\\Models\\\w+::withCount\(\)'
        // ], [
        //     'pattern' => 'Call to an undefined static method Illuminate\\Support\\Facades\\Broadcast::routes\(\)'
        // ], [
        //     'pattern' => 'Call to an undefined static method Illuminate\\Support\\Facades\\Route::middleware\(\)'
        // ], [
        //     'pattern' => 'Call to an undefined static method Illuminate\\Support\\Facades\\Route::prefix\(\)'
        // ], [
        //     'pattern' => 'Call to an undefined static method Illuminate\\Support\\Facades\\Validator::make\(\)'
        // ], [
        //     'pattern' => 'firstOrNew'
        // ], [
        //     'pattern' => 'getQueryLog'
        // ], [
        //     'pattern' => 'Missing class doc comment',
        // ], [
        //     'pattern' => 'Missing file doc comment'
        // ], [
        //     'pattern' => 'Opening parenthesis of a multi-line function call must be the last content on the line'
        // ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ReversionIgnore::insert(self::DATA);
    }
}
