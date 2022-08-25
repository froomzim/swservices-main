<?php

use App\Http\Controllers\SynchronizationController;
use App\Services\Synchronization\ClientService;
use App\Services\Synchronization\ProductService;
use App\Services\Synchronization\UserService;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $routine = (new ProductService);
      return $routine->sync();
});
