<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Allfiandi Rahman",
        "email" => "allfiandi123@gmail.com",
        "image" => "allfiandi.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Allfiandi Rahman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint temporibus alias odio quod ipsam, quas dolores excepturi corrupti quos minus quidem voluptas blanditiis architecto iste sed asperiores accusamus, doloremque recusandae eos ea doloribus, consequuntur nobis fugit magni! Iusto ullam corporis nam ratione quia aliquid dolores vero pariatur distinctio cumque praesentium voluptatibus necessitatibus, reprehenderit repellendus ex enim! Quas minus inventore magnam hic dolor itaque, cum ipsam odit alias dignissimos recusandae explicabo labore reprehenderit quis? Neque iure impedit molestias cum rem eligendi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Iqmal Mipmar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde ad beatae quibusdam fugiat magnam obcaecati dolor minima sunt deleniti quod, molestiae esse harum aliquam facere labore quas! Qui neque dicta culpa, explicabo commodi rem quos iusto delectus facilis fuga. Nam explicabo quaerat labore distinctio cupiditate ipsam molestias consequatur quam. Pariatur atque mollitia obcaecati delectus odio omnis provident voluptas perspiciatis, tempore inventore ipsa sit iusto eos velit repellat quaerat possimus, rem, officia illo excepturi praesentium facere. Non neque voluptatibus facere commodi, assumenda iste libero tempore repudiandae ad esse corrupti nostrum ipsum expedita facilis laudantium eius ipsa aliquam rem sunt. Odit?"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Allfiandi Rahman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint temporibus alias odio quod ipsam, quas dolores excepturi corrupti quos minus quidem voluptas blanditiis architecto iste sed asperiores accusamus, doloremque recusandae eos ea doloribus, consequuntur nobis fugit magni! Iusto ullam corporis nam ratione quia aliquid dolores vero pariatur distinctio cumque praesentium voluptatibus necessitatibus, reprehenderit repellendus ex enim! Quas minus inventore magnam hic dolor itaque, cum ipsam odit alias dignissimos recusandae explicabo labore reprehenderit quis? Neque iure impedit molestias cum rem eligendi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Iqmal Mipmar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde ad beatae quibusdam fugiat magnam obcaecati dolor minima sunt deleniti quod, molestiae esse harum aliquam facere labore quas! Qui neque dicta culpa, explicabo commodi rem quos iusto delectus facilis fuga. Nam explicabo quaerat labore distinctio cupiditate ipsam molestias consequatur quam. Pariatur atque mollitia obcaecati delectus odio omnis provident voluptas perspiciatis, tempore inventore ipsa sit iusto eos velit repellat quaerat possimus, rem, officia illo excepturi praesentium facere. Non neque voluptatibus facere commodi, assumenda iste libero tempore repudiandae ad esse corrupti nostrum ipsum expedita facilis laudantium eius ipsa aliquam rem sunt. Odit?"
        ],
    ];

    $new_post = [];

    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]); 
}); 