<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get(
    '{uri}',
    '\\'.Pallares\LaravelNuxt\Controllers\NuxtController::class
)->where('uri', '.*');

// Route::get(
//     '/{path?}',
//     function() {
//         // ...
//         // If the request expects JSON, it means that
//         // someone sent a request to an invalid route.
//         //   if ($request->expectsJson()) {
//         //       abort(404);
//         //   }
 
//         // var_dump(env('NUXT_OUTPUT_PATH', public_path('spa.html')));exit;
//         // Fetch and display the page from the render path on nuxt dev server or fallback to static file
//         // return response(file_get_contents(env('NUXT_OUTPUT_PATH', public_path('spa.html'))), 200)
//         //           ->header('Content-Type', 'text/plain');
//         return file_get_contents(env('NUXT_OUTPUT_PATH', public_path('spa.html')));
//     }
// )->where('path', '.*')
//  // Redirect to Nuxt from within Laravel
//  // by using Laravels route helper
//  // e.g.: `route('nuxt', ['path' => '/<nuxtPath>'])`
//  ->name('nuxt');