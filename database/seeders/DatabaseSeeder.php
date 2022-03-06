<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\CategoryBook;
use App\Models\Galery;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Jubran',
            'username' => '11111111',
            'email' => 'jenniejubran@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Admin',
            'username' => '12345678',
            'email' => 'admin@smkwikrama.sch.id',
            'is_admin' => 1,
            'password' => bcrypt('12345678')
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

        //Category buku
        CategoryBook::create([
            'name' => 'Novel'
        ]);

        CategoryBook::create([
            'name' => 'Buku Pembelajaran'
        ]);

        CategoryBook::create([
            'name' => 'Biografi'
        ]);
        
        Post::factory(10)->create();

        Galery::factory(10)->create();
    }
}
