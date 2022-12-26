<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function saveComment(Request $request)
    {
        $comment = Comments::create([
            'content' => $request->content,
            'author' => $request->author,
            'post_id' => $request->post_id,
        ]);

        $referer = request()->headers->get('referer');
        $path_to_redirect = parse_url($referer, PHP_URL_PATH);

        return redirect($path_to_redirect)->with('message_sucess', 'Комментарий успешно добавлен, как только он пройдет проверку, он появится на сайте');
    }

    public function allComments(Request $request)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $comments = Comments::all();
        return view('all_comments', ['comments' => $comments]);
    }

    public function showApprovedPage(Request $request)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $comment = Comments::find($request->id);
        return view('approved_comment', ['comment' => $comment]);
    }

    public function approvedComment(Request $request)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $comment = Comments::find($request->id);
        $comment->approved = 1;
        $comment->save();
        $comments = Comments::all();

        return Redirect::route('comments.all', ['comments' => $comments]);
    }

    public function editCommentPage(Request $request)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $comment = Comments::find($request->id);
        return view('edit_comment', ['comment' => $comment]);
    }

    public function updateComment(Request $request, Comments $comment)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }

        $comment = $comment->find($request->id);

        $array_post_data = [
            'author' => $request->author,
            'content' => $request->content,
            'post_id' => $comment->post->id,
        ];

        $comment->fill($array_post_data);
        $comment->save();

        $comments = Comments::all();

        return Redirect::route('comments.all', ['comments' => $comments]);
    }

    public function deletePageComment(Request $request)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }
        $comment = Comments::find($request->id);
        return view('delete_comment', ['comment' => $comment]);
    }

    public function deleteComment(Comments $comment)
    {
        if(!Gate::allows('access-admin')) {
            abort(403);
        }

        $comment->delete();

        $comments = Comments::all();

        return Redirect::route('comments.all', ['comments' => $comments]);
    }
}
