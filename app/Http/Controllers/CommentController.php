<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index() {
        $breadcrumbs = [
            ['Comment', true, route('admin.comment.index')],
            ['Index', false],
        ];
        $title = 'All Comment';
        $comments = Comment::latest()->get();
        return view('admin.comment.index', compact('breadcrumbs', 'title', 'comments'));
    }

    public function destroy(Comment $comment) {
        $comment->delete();
        return redirect()->back();
    }
}
