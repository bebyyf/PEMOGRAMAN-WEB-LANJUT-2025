<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ItemController; //digunakan untuk mengambil ItemController agar bisa digunakan dalam file laravel untuk pemanggilan metode controller.

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Jobsheet 1 
Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {   //kode ini berfungsi untuk membuat route /world 
    return 'World'; //kode ini berfungsi untuk menampilkan output 'World' saat URL route diakses di browser
}); 

// Route halaman utama
Route::get('/', [HomeController::class, 'index']);

// Route halaman about
Route::get('/about', [AboutController::class, 'about']);

Route::get('/user/{name} ', function ($name){ //kode ini meruapakan route dinamis yang dimana URl yang akan di akses di browser, namun nama tersebut dapat diganti sesuai dengan kebutuhan.
    return 'Nama saya '. $name; //kode ini dapat memanggil sesuai dengan inputan pada URL tadi
}); 

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { //digunakan untuk membuat route yang menangani permintaan GEt yang memiliki 2 parameter 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; //berfungsi apabila URL diakses pada browser maka postId akan memnerima inputan hasil dari post, dan commentID akan menerima inputan nilai dari comment
});

// Route halaman Articles(id)
Route::get('/articles/{id}', [ArticleController::class, 'articles']);


Route::get(' /user/{name?}', function ($name='John'){ //digunakan untuk membuat route get yang dapat menerima inputan paraameter (nama), apabila nama tidak diisi maka akan bernilai null 
    return 'Nama saya '.$name;
});

Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
]); 
 
Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' ]); 

    Route::get('/greeting', [WelcomeController::class, 'greeting']);


Route::resource('items', ItemController::class); //digunakan untuk mendaftarkan semua crud secara otomatis.



