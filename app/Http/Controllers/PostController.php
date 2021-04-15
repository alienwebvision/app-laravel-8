<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(2);

//        dd($posts);

        //  return view('admin.posts.index', [
        //      'posts' => $posts, --ou -->

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $request)
    {

        Post::create($request->all());

        return redirect()
            ->route('posts.index')
            ->with('message', 'Post Criado com secesso!');
    }

    public function show($id)

    {
//        dd($id);
//        $post = Post::where('id', $id)->first();
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('posts.index');
        }
//        dd($post);

        return view('admin.posts.show', compact('post'));
    }


    public function destroy($id)
    {
//        dd("Deletando o Post ID: {$id}");

        if (!$post = Post::find($id))
            return redirect()->route('posts.index');
        $post->delete();

        return redirect()
            ->route('posts.index')
            ->with('message', 'Post Deletado com secesso!');

    }

    public function edit($id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }
        return view('admin.posts.edit', compact('post'));
    }


    public function update(StoreUpdatePost $request, $id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }
        $post->update($request->all());

        return redirect()
            ->route('posts.index')
            ->with('message', 'Post Atualizado com sucesso');
    }

    public function search(Request $request)
    {

        $filters = $request->except('_token');
//        dd("Pesquisando por {$request->search}");
        $posts = Post::where('title', '=', $request->search)
            ->orWhere('content', 'LIKE', "%{$request->search}%")
            ->paginate(2);
        return view('admin.posts.index', compact('posts', 'filters'));
    }
}
