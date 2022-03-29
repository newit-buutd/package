<?php 

Route::group([
    'namespace'  => 'OptionVendor\OptionPackage\app\Http\Controllers',
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
], function () {
    Route::get('log', 'SkillCrudController@index')->name('log.index');
});