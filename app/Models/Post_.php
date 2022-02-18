<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rosie",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil minima laborum deleniti est nisi ipsum delectus impedit odio dolorum. Consequatur soluta maxime voluptatum cum odit beatae illum voluptate rem? Fuga ullam praesentium, harum inventore vel nostrum vitae ea impedit error id rem officia, tempora aliquid pariatur facilis laborum? In praesentium quas necessitatibus dicta facilis. Modi dignissimos enim voluptas, quam nihil sit ea nesciunt autem rem vitae earum atque officia fugit debitis culpa doloribus odit impedit nisi voluptate facilis rerum."
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Ryujin",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum itaque fugit unde, ea explicabo illum minima veniam temporibus id quia saepe labore numquam eos nemo voluptate iure libero voluptatem ipsa vero accusantium quidem porro maiores dolorem. Voluptas esse explicabo magnam. Distinctio iste laborum reiciendis! Maiores optio recusandae accusamus, numquam sit quos pariatur, possimus modi assumenda, sequi delectus incidunt ab dicta nemo cum distinctio! Sunt, non dignissimos. Molestias fugit doloribus, eveniet quia quibusdam reprehenderit laudantium, amet repudiandae esse vero quae! Beatae obcaecati voluptatem culpa maxime illo. Mollitia quo non aliquid odit error, veniam enim harum, nulla, iusto quod minima numquam doloribus."
        ]
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
