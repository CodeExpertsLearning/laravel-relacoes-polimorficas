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

Route::get('/', function () {

    // Criar um user
    // $user = \App\User::create([
    //     'name' => 'Teste Poli',
    //     'email' => 'test@gmail.com',
    //     'password' => bcrypt('12345678')
    // ]);
    //Associar a imagem dele
    // $user = \App\User::find(1);
    // $user->image()->create([
    //     'image' => 'profile-' . $user->id . '.jpg'
    // ]);

    // return $user->load('image');

    // $post = \App\Post::create([

    //     'title' => 'Titulo post teste'
    // ]);

    // $post->image()->create([
    //     'image' => 'profile-' . $post->id . '.jpg'
    // ]);

    // return $post->load('image');

    $image = \App\Image::find(3);

    dd($image->imageable);
});

Route::get('/many', function(){

    return \App\Comment::find(3)->commentable;

    $video = \App\Video::create(['embed' => '1ddsdeASASAS']);

    $video->comments()->create([
        'comment' => 'Comentário polimórfico no video'
    ]);

    return $video->load('comments');

    // $post->image()->create([
    //     'image' => 'capa.jpg'
    // ]);

    // $post->comments()->create([
    //     'comment' => 'Comentário polimórfico 2'
    // ]);

    $post = $post->load(['comments', 'image']);

    return $post->comments->first()->comment;

});



Route::get('/m-m', function(){
    // \App\Tag::create(['name' => 'Tecnologia']);
    // \App\Tag::create(['name' => 'Finanças']);
    //return \App\Tag::all();

    // $post = \App\Post::first();
    // // dd($post->tags()->sync([1,2]));

    // return $post->tags;

    //$video = \App\Video::first();
    // dd($video->tags()->sync([2]));

    // return $video->tags;

    $tag = \App\Tag::find(1);
    return $tag->videos;
});
