<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index()
    {
        $Post = Post::all();
      return view('viewAdmin.admin_post',['Post' => $Post]);
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        return response()->json($post, 201);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return response()->json($post, 200);
    }

    public function delete(Post $post)
    {
        $post->delete();

        return response()->json(null, 204);
    }}
