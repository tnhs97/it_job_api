<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\Skill;
use App\Http\Requests\PostRequest;

class SkillController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getSkill(){
        $Skill = Skill::all();
      return view('viewAdmin.admin_skill',['Skill' => $Skill]);
    }

    public function getAddPost(){
        return view('viewAdmin.addPosts');
    }

    public function postAddPost(PostRequest $req){
        $post=new posts;
        $post->Title=$req->txtTitle;
        $post->Description=$req->txtDescription;
        $post->requirement=$req->txtRequirement;
        $post->Salary=$req->txtSalary;
        $post->Amount_of_people=$req->txtAmount_of_people;
        $post->Start_day=$req->dateStart_day;
        $post->End_day=$req->dateEnd_day;
        $post->save();
        return redirect()->action('SkillController@getSkill')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add Post']);
    }

    public function getDeleteSkill($id){
        $Skill=Skill::find($id);
        $Skill->delete($id);
        return redirect()->action('SkillController@getSkill')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete Skill']);
    }

    public function getEditPost($id){
        $data=posts::find($id);
        $parent=posts::select('id','Title','Description','requirement','Salary','Amount_of_people','Start_day','End_day')->get()->toArray();
        return view('viewAdmin.editPost',compact('data','parent','id'));
    }

    public function postEditPost(PostRequest $req,$id){
        $Skill=posts::find($id);
        $post->Title=$req->get('txtTitle');
        $post->Description=$req->get('txtDescription');
        $post->requirement=$req->get('txtRequirement');
        $post->Salary=$req->get('txtSalary');
        $post->Amount_of_people=$req->get('txtAmount_of_people');
        $post->Start_day=$req->get('dateStart_day');
        $post->End_day=$req->get('dateEnd_day');
        $post->save();
        return redirect()->action('SkillController@getSkill')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update Post']);

    }
}
