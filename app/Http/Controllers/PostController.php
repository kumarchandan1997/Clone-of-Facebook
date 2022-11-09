<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

class PostController extends Controller
{
    public function index()
    {
        $user=User::where('id',Auth::id())->get();
        $post=Post::where('user_id',Auth::id())->get();
        //  dd($post);
        return view('facebook.index',compact('post','user'));
    }
    public function post()
    {
        return view('facebook.post');
    }

    public function save(Request $request)
    {
        $post=new Post();
        if($request->hasfile('post_image'))
        {
            $file = $request->file('post_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('assets/uploads/post/', $filename);
            $post->post_image = $filename;
        }
        $post->location = $request->input('location');
        $post->description = $request->input('description');
        $post->user_id= Auth::id();
        $post->save();
        return redirect('/index')->with('status','Post Added Successfully');
    }
    public function edit_user()
    {
        return view('facebook.edit_user');
    }
    public function save_user(Request $request)
    {
        $user=User::where('id',Auth::id())->first();
        $user->password= $request->input('change_password');
        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('assets/uploads/user/', $filename);
            $user->profile_image = $filename;
        }
        $user->update();
        return redirect('/index')->with('status','Password and profile image updated successfully');
    }

    public function search(Request $request)
{
if($request->ajax())
{
$output="";
$products=DB::table('users')->where('name','LIKE','%'.$request->search."%")->get();
dd($products);
if($products)
{

return Response($products);
   }
   }
}

}
