<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $comics = Comic::All();
        return view('home', compact('comics'));
    }
}
