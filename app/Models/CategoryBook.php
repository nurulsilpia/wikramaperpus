<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryBook extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function books()
    {
        return $this->hasMany(Book::class);
        // 1 category punya banyak buku. model CategoryBook sdh berelasi dg model Book
    }
}
