<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getPosts(){
        $Post = Post::all();
      return view('viewAdmin.admin_post',['Post' => $Post]);
    }

    public function getAddPost(){
        return view('viewAdmin.addPosts');
    }

    public function postAddPost(PostRequest $req){
        $post=new Post;
        $post->Title=$req->txtTitle;
        $post->Description=$req->txtDescription;
        $post->requirement=$req->txtRequirement;
        $post->Amount_of_people=$req->txtAmount_of_people;
        $post->Start_day=$req->dateStart_day;
        $post->End_day=$req->dateEnd_day;
        $post->save();
        return redirect()->action('PostController@getPosts')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add Post']);
    }

    public function getDeletePost($id){
        $post=Post::find($id);
        $post->delete($id);
        return redirect()->action('PostController@getPosts')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete Post']);
    }

    public function getEditPost($id){
        $data=Post::find($id);
        $parent=Post::select('id','Title','Description','requirement','Salary','Amount_of_people','Start_day','End_day')->get()->toArray();
        return view('viewAdmin.editPost',compact('data','parent','id'));
    }

    public function postEditPost(PostRequest $req,$id){
        $post=Post::find($id);
        $post->Title=$req->txtTitle;
        $post->Description=$req->txtDescription;
        $post->requirement=$req->txtRequirement;
        $post->Amount_of_people=$req->txtAmount_of_people;
        $post->Start_day=$req->dateStart_day;
        $post->End_day=$req->dateEnd_day;
        $post->save();
        return redirect()->action('PostController@getPosts')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update Post']);

    }
}
