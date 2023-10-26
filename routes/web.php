<?php
use App\Models\Post;
// use App\Http\Controllers\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// organizado por grupos de un mismo controlador
Route::controller(PageController::class)->group(function(){
    Route::get('/',                   'home')      ->name('home');
    Route::get('blog',                'blog')      ->name('blog');
    Route::get('blog/{post:slug}',    'post')      ->name('post');
    Route::get('posteos/{post:slug}', 'posteos')   ->name('posteos');
    Route::get('dashboard',           'dashboard') ->name('dashboard');

    Route::resource('posts', PostController::class)->middleware(['auth', 'verified'])->except('show');

    //ahora esta ruta tiene un dato que es una propiedad de post
});
//Controlador de páginas

// esto debe estar en el controlador
// Route::get('/dashboard', function (Request $request, Post $post) {

//     $search = $request->search;
//     $posts = Post::where('title', 'LIKE',"%{$search}%")->latest()->paginate();

//     return view('dashboard', ['posts' => $posts]);
// })->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile',    [ProfileController::class, 'edit']   )->name('profile.edit');
    Route::patch('/profile',  [ProfileController::class, 'update'] )->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';



