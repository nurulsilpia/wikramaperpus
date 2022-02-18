<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Ryusie',
        //     'email' => 'ryusie@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        User::create([
            'name' => 'Jubran',
            'username' => 'Jennie Ruby Jubran',
            'email' => 'jenniejubran@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas dolorum minima ducimus at quidem quae aliquam debitis odit placeat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas dolorum minima ducimus at quidem quae aliquam debitis odit placeat, nam fugiat saepe, cum non maxime voluptas soluta officia? Eligendi corrupti eveniet magnam amet quam earum. Quas minus provident quam, et consequatur rem odit autem impedit voluptate odio iure corporis. Ipsa vitae dolorem itaque ratione facere nisi. Nisi nihil dolore optio. Molestias deserunt ipsum molestiae reprehenderit. Excepturi aperiam ut placeat voluptates deserunt suscipit enim facilis modi, ipsum officia, hic laborum pariatur harum, dignissimos tempora laboriosam fuga fugit quos vitae maxime eveniet illo possimus cumque quidem. Et ipsa reiciendis voluptatibus itaque.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas dolorum minima ducimus at quidem quae aliquam debitis odit placeat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas dolorum minima ducimus at quidem quae aliquam debitis odit placeat, nam fugiat saepe, cum non maxime voluptas soluta officia? Eligendi corrupti eveniet magnam amet quam earum. Quas minus provident quam, et consequatur rem odit autem impedit voluptate odio iure corporis. Ipsa vitae dolorem itaque ratione facere nisi. Nisi nihil dolore optio. Molestias deserunt ipsum molestiae reprehenderit. Excepturi aperiam ut placeat voluptates deserunt suscipit enim facilis modi, ipsum officia, hic laborum pariatur harum, dignissimos tempora laboriosam fuga fugit quos vitae maxime eveniet illo possimus cumque quidem. Et ipsa reiciendis voluptatibus itaque.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas dolorum minima ducimus at quidem quae aliquam debitis odit placeat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas dolorum minima ducimus at quidem quae aliquam debitis odit placeat, nam fugiat saepe, cum non maxime voluptas soluta officia? Eligendi corrupti eveniet magnam amet quam earum. Quas minus provident quam, et consequatur rem odit autem impedit voluptate odio iure corporis. Ipsa vitae dolorem itaque ratione facere nisi. Nisi nihil dolore optio. Molestias deserunt ipsum molestiae reprehenderit. Excepturi aperiam ut placeat voluptates deserunt suscipit enim facilis modi, ipsum officia, hic laborum pariatur harum, dignissimos tempora laboriosam fuga fugit quos vitae maxime eveniet illo possimus cumque quidem. Et ipsa reiciendis voluptatibus itaque.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas dolorum minima ducimus at quidem quae aliquam debitis odit placeat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas dolorum minima ducimus at quidem quae aliquam debitis odit placeat, nam fugiat saepe, cum non maxime voluptas soluta officia? Eligendi corrupti eveniet magnam amet quam earum. Quas minus provident quam, et consequatur rem odit autem impedit voluptate odio iure corporis. Ipsa vitae dolorem itaque ratione facere nisi. Nisi nihil dolore optio. Molestias deserunt ipsum molestiae reprehenderit. Excepturi aperiam ut placeat voluptates deserunt suscipit enim facilis modi, ipsum officia, hic laborum pariatur harum, dignissimos tempora laboriosam fuga fugit quos vitae maxime eveniet illo possimus cumque quidem. Et ipsa reiciendis voluptatibus itaque.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
