<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
     // Get all events from the database
     $posts = Post::all();

     // Pass events to the view
     return view('frontend.archive.blogs', compact('posts'));
    }
}
