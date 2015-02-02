<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::with('user')->get();

        if(is_null($posts) || $posts->isEmpty()) {
            return Response::json(['success' => false]);
        }

        $posts->map(function(&$post) {
            //$post->like_count = count($post->likes);
            $post->comment_count = count($post->comments);
        });

        return Response::json([
            'success' => true,
            'data' => $posts
        ]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::with('user', 'comments', 'comments.user')->find($id);

        if(is_null($post) || !$post) {
            return Response::json(['success' => false]);
        }

        $post->comment_count = count($post->comments);

        return Response::json([
            'success' => true,
            'data' => $post
        ]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
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
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
