<?php

namespace App\Models;

use App\Models\Book;
use App\Models\DataSiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sirkulasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->belongsTo(DataSiswa::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
