<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Models\Customer;

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

Route::get('/', [Register::class, 'index'])->name('customer.create');
Route::post('/', [Register::class, 'register']);
Route::get('/delete/{id}', [Register::class, 'delete'])->name('customer.delete');
Route::get('/edit/{id}', [Register::class, 'edit'])->name('customer.edit');
Route::post('/update/{id}', [Register::class, 'update'])->name('customer.update');
Route::get('/view', [Register::class, 'view']);

Route::get('/test', function () {
    $customers = Customer::all();
    echo '<pre>';
    print_r($customers->toArray());
});
