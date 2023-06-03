<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Vandi Setyawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, sint ratione est sunt consequuntur pariatur recusandae quia perferendis deleniti hic culpa excepturi eos eligendi facilis nesciunt dolorum omnis aut, unde deserunt ea numquam possimus? Dolores quidem est provident quasi laborum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jajan Putu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quam suscipit minima labore. Temporibus praesentium corporis ab ratione. Atque alias quaerat cum, commodi fugiat, aliquid quidem saepe sunt in rerum voluptatibus aspernatur mollitia eius architecto, ab omnis! Ipsam, explicabo veniam!"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
