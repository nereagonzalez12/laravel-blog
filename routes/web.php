<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use PhpParser\Node\Expr\AssignOp\Pow;

Route::get('/', HomeController::class);

// Route::get('/posts', [PostController::class, 'index'])
//     ->name('posts.index');

// Route::get('/posts/create', [PostController::class, 'create'])
//     ->name('posts.create');
// Route::post('/posts', [PostController::class, 'store'])
//     ->name('posts.store');

// Route::get('/posts/{post}', [PostController::class, 'show'])
//     ->name('posts.show');
// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
//     ->name('posts.edit');
// Route::put('/posts/{post}', [PostController::class, 'update'])
//     ->name('posts.update');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])
//     ->name('posts.destroy');


Route::resource('posts', PostController::class);
// ->except('destroy');
// ->only('index', 'create', 'store'); 
// ->parameters(['article' => 'post'])
// ->names('posts');


// Route::apiResource('posts', PostController::class);














//Route::get('prueba', function () {

    /* 
    // Create new Post ==========
    $post = new Post;
    $post->title = 'titulo de prueba 1';
    $post->content = 'contenido de prueba 1';
    $post->category = 'categoria de prueba 1';
    $post->save();


    // Find posts ==========
    $post = Post::find(1);
    $post =  Post::all();
    
    // First coincidence
    $post = Post::where('title', 'titulo de prueba 1')
    ->first();

    $post = Post::where('id', '>=', '2')
    ->get();
    
    $post = Post::orderBy('id', 'desc')->get();
    
    $post = Post::orderBy('title', 'asc')
    ->select('id', 'title')
    ->take(2)
    ->get();
    
    
    // Update a post ==========
    $post->category = 'Desarrollo web';
    $post->save();


    // Delete a post ==========
    $post = Post::find(2);
    $post->delete();
    
    */
//});
