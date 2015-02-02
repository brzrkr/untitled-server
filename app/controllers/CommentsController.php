<?php

class CommentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /comments
	 *
	 * @return Response
	 */
	public function index($post_id)
	{
		$comments = Comment::where('post_id', '=', $post_id)->get();

        if(is_null($comments) || $comments->isEmpty()) {
            return Response::json(['success' => false], 404);
        }

        return Response::json([
            'success' => true,
            'data' => $comments
        ]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /comments
	 *
	 * @return Response
	 */
	public function store($post_id)
	{

		$comment = new Comment;

        $comment->fill(Input::all());
        $comment->post_id = $post_id;
        $comment->user_id = Auth::user()->id;

        if($comment->save()) {
            $comment->load('user');

            return Response::json([
                'success' => true,
                'message' => 'Comment added to post!',
                'data' => $comment
            ]);
        } else {
            return Response::json([
                'success' => false,
                'errors' => join($comment->getErrors()->all(':message<br/>')),
                'message' => 'Unable to Create Comment'
            ]);
        }
	}

	/**
	 * Display the specified resource.
	 * GET /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
