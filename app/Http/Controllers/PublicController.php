<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $posts = Post::simplePaginate(12);
        //$posts = Post::paginate(12);
        return view('welcome', compact('posts'));
    }
}
