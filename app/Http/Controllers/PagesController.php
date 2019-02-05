<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;
class PagesController extends Controller
{
    public function index(){
        $posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('pages.index')->with('posts', $posts);
    }

    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
