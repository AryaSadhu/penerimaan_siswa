<?php

// use App\Models\Post;
// use App\Models\User;

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Arya Sadhu",
        "email" => "madearyasadhu@gmail.com",
        "image" => "sadhu.jpg",
        "jenis_kelamin" => "laki-laki",
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak"


    ]);
});


$blog_posts = [
    [
        "title" => "Judul Posts Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Arya Sadhu",
        "body" => " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa iusto perferendis distinctio voluptatibus molestiae ullam nostrum! Sapiente dolorum repudiandae magnam voluptas cum provident illo quaerat hic laudantium inventore tempora perspiciatis, atque minima non enim deleniti. Quam accusamus aperiam qui. Ab nam consequatur eaque officia corporis architecto assumenda nobis iure molestiae! Cupiditate labore perferendis quod dolor, culpa alias. Mollitia, eligendi. Veritatis labore laboriosam a libero eum totam! Cumque cupiditate blanditiis dolore assumenda qui dolor, deleniti molestiae repellat nostrum a quisquam similique."

    ],
    [
        "title" => "Judul Posts Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Sandhika Galih",
        "body" => "     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, explicabo beatae suscipit neque illo ipsa a animi veritatis molestias, facere repudiandae fuga quidem perferendis sint? Perspiciatis temporibus, laudantium cupiditate magnam vitae fuga sunt modi, reiciendis, iure cum deserunt atque amet. Repudiandae ad dolor aliquam, possimus eveniet a ab porro quaerat molestias dicta nobis! Enim perferendis hic voluptatibus quas omnis, tempore illo nam nesciunt quidem nemo adipisci, itaque rerum labore est cum exercitationem tempora molestiae fugiat harum? Eveniet voluptatum, eos commodi delectus vitae praesentium possimus sequi qui ipsam dolorum architecto quae suscipit ad libero optio aliquam nemo vel! Voluptate, non perspiciatis."

    ],
];

Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()

    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);








Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');



Route::resource('dashboard/posts', 'App\Http\Controllers\DashboardPostController')
    ->middleware('auth');

// Route::get('/dashboard/posts/',[DashboardPostController::class,'index'])->middleware('auth');
// Route::get('/dashboard/posts/show',[DashboardPostController::class,'show'])->middleware('auth');












Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');



Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
