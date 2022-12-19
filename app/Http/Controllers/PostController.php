<?php

namespace App\Http\Controllers;

use App\Helpers\APIHelpers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //api delete
    public function apidestroy($id)
    {
        $product = Post::find($id);
        $product->delete();
        return response()->json(['status' => 'Success', 'Message' => 'Product Deleted']);
    }

    //api get all posts
    public function apigetall()
    {
        $post=Post::all();
        $response = APIHelpers::createAPIResponse(false, 200, '', $post);
        return response()->json($response, 200);
    }
    //api response one post
    public function apiget($id)
    {
        $post=Post::find($id);
        $response = APIHelpers::createAPIResponse(false, 200, '', $post);
        return response()->json($response, 200);
    }


    //api store data
    public function apiupdate(Request $request, $id){
        $post = Post::find($id);
        $post->title = $request->title;
        $post->image = $request->image;
        $post->content = $request->content;


        $post->save();
        return response()->json($post);
    }


    //All posts
    public function index()
    {
        return view(
            'posts.index',
            [
                'heading' => 'My heading',
                'posts' => Post::all()
            ]
        );
    }

    //Single post
    public function show(Post $post)
    {
        return view(
            'posts.show',
            [
                'post' => $post
            ]
        );
    }

    //create post form
    public function create()
    {
        return view('posts.create');
    }

    //store post data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'image' => 'url',
            'content' => 'required|min:10|max:1000'
        ]);

        $formFields['user_id'] = auth()->id();

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created succesfully!');
    }


    //edit post
    public function edit(Post $post)
    {
        return view(
            'posts.edit',
            ['post' => $post]
        );
    }

    //update post
    public function update(Request $request, Post $post)
    {

        //check if user is owner
        if ($post->user_id != auth()->id()) {
            abort(403, 'unathorized action');
        }

        $this->validate(request(), [
            'title' => 'required',
            'image' => 'url',
            'content' => 'required|min:10|max:1000'
        ]);




        $post->update([
            'title' => request('title'),
            'image' => request('image'),
            'content' => request('content')
        ]);

        return back()->with('message', 'Post created succesfully!');
    }

    //delete post
    public function destroy(Post $post)
    {
        //check if user is owner
        if ($post->user_id != auth()->id()) {
            abort(403, 'unathorized action');
        }
        $post->delete();
        return redirect('/')->with('message', 'Post deleted!');
    }

    //manage posts
    public function manage()
    {
        return view('posts.manage', [
            'posts' => auth()->user()->posts()->get()
        ]);
    }
}
