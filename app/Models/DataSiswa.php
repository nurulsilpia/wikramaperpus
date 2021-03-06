<?php

namespace App\Models;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataSiswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function book()
    {
        return $this->belongsTo(Book::class);
        // 1 buku bisa di pinjem 1 siswa
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
