<?php

namespace App\Http\Controllers;

use App\Models\CgHead;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        return view('admin.main', [
            'title' => 'Dashboard'
        ]);
    }

    public function user ()
    {
        $users = User::all();
        return view('admin.user', [
            'title' => 'User',
            'users' => $users
        ]);
    }

    public function cg ()
    {
        $cgs = CgHead::all();
        return view('admin.editcg', [
            'title' => 'Edit CG',
            'cgs' => $cgs
        ]);
    }

    public function post ()
    {
        $posts = Post::all();
        return view('admin.post', [
            'title' => 'Post',
            'posts' => $posts
        ]);
    }

    public function role (User $user)
    {
        $user = User::find($user->id);

        if ($user->role == 1) {
            $user->role = 2;
        } else {
            $user->role = 1;
        }

        $user->save();

        return redirect('/admin/user');
        // ->with('success', 'Role Changed');
    }

    public function editUser(User $user)
    {
        $user = User::find($user->id);
        return view('admin.edituser', [
            'title' => 'Edit User',
            'user' => $user
        ]);
    }

    public function editCg(CgHead $cg)
    {
        $cg = CgHead::find($cg->id);
        return view('admin.utilizecg', [
            'title' => 'Edit CG',
            'cg' => $cg
        ]);
    }

    public function editPost(Post $post)
    {
        $post = Post::find($post->id);
        return view('admin.editpost', [
            'title' => 'Edit Post',
            'post' => $post
        ]);
    }

    public function updateUser (User $user, Request $request) 
    {
        $user = User::find($user->id);
        
        $user->name = $request->name;
        $user->birthdate = $request->birthdate;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->line = $request->line;
        $user->save();
        
        return redirect('/admin/user');
        // ->with('success', 'User Updated');
    }
    
    public function updateCg(CgHead $cg, Request $request)
    {
        $cg = CgHead::find($cg->id);

        $cg->name = $request->name;
        $cg->phone = $request->phone;
        $cg->date = $request->date;
        $cg->location = $request->location;
        $cg->time = $request->time;
        $cg->save();

        return redirect('/admin/cg');
    }

    public function updatePost (Post $post, Request $request)
    {
        $post = Post::find($post->id);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('/admin/post');
        // ->with('success', 'Post Updated');
    }

    public function delete (User $user)
    {
        $user = User::find($user->id);
        $user->delete();

        return redirect('/admin/user');
        // ->with('success', 'User Deleted');
    }

    public function deletePost (Post $post)
    {
        $post = Post::find($post->id);
        $post->delete();

        return redirect('/admin/post');
        // ->with('success', 'Post Deleted');
    }
}
