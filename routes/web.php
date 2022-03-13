<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::group([
    'prefix' => config('joy-replace-keyword.admin_prefix', 'admin'),
    'as' => 'joy-replace-keyword.'
], function () {

    $namespacePrefix = '\\' . config('joy-replace-keyword.controllers.namespace') . '\\';

    Route::group(['middleware' => 'admin.user'], function () use ($namespacePrefix) {

        $breadController = $namespacePrefix . 'BaseController';

        try {
                // Route::get('/replace-keyword', $breadController.'@replaceKeyword')->name('replace-keyword');
        } catch (\InvalidArgumentException $e) {
            throw new \InvalidArgumentException("Custom routes hasn't been configured because: " . $e->getMessage(), 1);
        } catch (\Exception $e) {
            // do nothing, might just be because table not yet migrated.
        }

        // Route::get('replace-keyword', $breadController.'@replaceKeywordAll')->name('replace-keyword-all');
    });

});
