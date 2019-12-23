<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function All_Posts()
    {
        $posts = Posts::all();
        return $posts;
    }
}
