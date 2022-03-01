<?php

namespace App\Models;

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
        // 1 buku punya 1 category. model Book sdh berelasi dg model CategoryBook
    }

    public function getRouteKeyName()
    {
        return 'judul';
    }
}
