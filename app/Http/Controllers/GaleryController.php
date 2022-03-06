<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;

class GaleryController extends Controller
{
    public function index()
    {
        return view('galery.galery', [
            "galeries" => Galery::latest()->paginate(6)->withQueryString()
        ]);
    }
}
