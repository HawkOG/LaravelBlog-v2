<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comment;
use URL;

class CommentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc');
        return compact('comments');
    }
    public function store(Request $request, $post){
        $this->validate(request(), [
            'body' => 'required'
        ]);
        Comment::create([
            'body' => request('body'),
            'post_id' => $post,
            'user_id' => auth()->user()->id
        ]);
        return redirect(URL::previous())->with('success', 'Successfully Commented');
    }
}