<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul artikel 1',
            'author' => 'bilal ahmad syafiq',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores natus facere praesentium quasi voluptatum voluptate dicta culpa tempore alias nulla hic explicabo sed quod deserunt, similique qui eos quisquam quae?Assumenda, ipsa! Nam maiores illum aliquid fugit nobis dolorum accusamus ea repudiandae perspiciatis, aperiam odio perferendis soluta, unde sapiente in expedita tempore! Beatae possimus, quisquam id eos nemo expedita vitae?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul artikel 2',
            'author' => 'bilal ahmad syafiq',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente consequuntur iure similique dolorem repellat aut dolor optio voluptatum nemo cumque ut nisi, facilis consequatur rem repudiandae animi neque deleniti placeat?
            In accusantium perferendis, aperiam sit magnam laudantium nihil magni quisquam voluptate sapiente. Architecto itaque, necessitatibus dignissimos quibusdam corporis cupiditate praesentium dolorem omnis voluptate. Tempore quos eveniet delectus maxime sint praesentium?
            Voluptatum itaque magnam hic quis suscipit eveniet quaerat vero minus corrupti sint, dolor fuga dolores ratione. Expedita suscipit officia voluptatibus praesentium ratione laudantium aliquam adipisci, earum harum rem odio doloremque.'
        ]
        ];
    }

    public static function find($slug)
    {
    
    // yang dibawah ini adalah cara lama
    // return Arr::first(static::all(), function($post) use($slug) {
    //     return $post['slug'] == $slug;
    // });

    // yang di bawah ini adalah cara kedua menggunakan arrow function
    $post = Arr::first(static::all(), fn ( $post) => $post['slug'] == $slug);

    if (!$post) {
        abort(404);
    }
    return $post;
    }
}



