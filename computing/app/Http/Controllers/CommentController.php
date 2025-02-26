<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{ 
    
    public function store(Request $request)
    {
        $request->validate([
            'body'=>'required',
        ]);
        $comment = new Comment();
        $comment->body =  $request->body;
        $comment->user()->associate($request->user());
        $post = Post::find($request->post_id);
        $post->comments()->save($comment);
        return back()->with('info','El comentario está siendo evaluado');
    }
    public function replyStore(Request $request)
    {
        $request->validate([
            'body'=>'required',
        ]);
        $reply = new Comment();
        $reply->body =  $request->get('body');
        $reply->user()->associate($request->user());
        $reply->parent_id =  $request->get('comment_id');
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($reply);
        return back()->with('info','La respuesta está siendo evaluado');
    }
    public function edit(Comment $commet)
    {
        return view('admin.posts.partials._editComments', compact('commet'));
    }
    public function update(Request $request, Comment $commet)
    {
        $request->validate([
            'body'=>'required',
        ]);
        $commet->fill($request->all())->save();
        return back()->with('info','Actualizado con éxito');
    }
    public function destroy(Comment $commet)
    {
        $commet->delete();
        return back()->with('info','Borrado con éxito');
    }
}