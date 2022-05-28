<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Post;
use App\Models\User;
use App\Models\Galery;
use App\Models\Category;
use App\Models\DataSiswa;
use App\Models\JenisBook;
use App\Models\CategoryBook;
use Illuminate\Database\Seeder;

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
            'name' => 'Admin',
            'username' => '12345678',
            'email' => 'admin@smkwikrama.sch.id',
            'is_admin' => 1,
            'password' => bcrypt('12345678')
        ]);


        User::create([
            'name' => 'Jubran',
            'username' => '11909090',
            'email' => 'jenniejubran@gmail.com',
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

        JenisBook::create([
            'jenis' => 'Ebook'
        ]);

        JenisBook::create([
            'jenis' => 'Buku Fisik'
        ]);

        Book::create([
            'jenis_id' => 1,
            'category_id' => 1,
            'judul' => 'Bibi Gill',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis velit dolor,',
            'pengarang' => 'Tere Liye',
            'penerbit' => 'Gramedia Pustaka',
            'tahun_terbit' => '2022',
            'isbn' => '12345678',
            'jumlah_buku' => 3,
            'jumlah_baca' => 100,
            'lokasi' => 'Rak Novel',
            'tanggal_input' => '2022-3-10'
        ]);

        Book::create([
            'jenis_id' => 2,
            'category_id' => 1,
            'judul' => 'SagaraS',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis velit dolor,',
            'pengarang' => 'Tere Liye',
            'penerbit' => 'Gramedia Pustaka',
            'tahun_terbit' => '2022',
            'isbn' => '12345678',
            'jumlah_buku' => 2,
            'jumlah_baca' => 100,
            'lokasi' => 'Rak Novel',
            'tanggal_input' => '2022-3-09'
        ]);

        Book::create([
            'jenis_id' => 1,
            'category_id' => 2,
            'judul' => 'Dasar Laravel',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis velit dolor,',
            'pengarang' => 'WPU Unpas',
            'penerbit' => 'GM Media',
            'tahun_terbit' => '2030',
            'isbn' => '12345678',
            'jumlah_buku' => 1,
            'jumlah_baca' => 100,
            'lokasi' => 'Rak Buku',
            'tanggal_input' => '1999-06-09'
        ]);

        Post::factory(10)->create();

        Galery::factory(10)->create();

    }
}
