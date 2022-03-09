<?php

namespace App\Models;

use App\Models\DataSiswa;
use App\Models\JenisBook;
use App\Models\CategoryBook;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(CategoryBook::class);
    }

    public function jenis()
    {
        return $this->belongsTo(JenisBook::class);
    }

    public function siswa()
    {
        return $this->hasMany(DataSiswa::class);
        // 1 buku bisa di pinjem banyak siswa
    }

    public function getRouteKeyName()
    {
        return 'judul';
    }
}
