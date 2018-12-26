<?php

namespace App\Http\Controllers;

use App\Http\Helpers\MyHelpers;
use App\Location;
use App\Post;
use App\Skill;
use Illuminate\Http\Request;

class PostFilterController extends Controller
{
    /**
     * Create a new PostFilterController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('cors');
    }

    public function filter(Request $request)
    {
        $skill = $request->skill;
        $location = $request->location;
        $order_by = $request->order_by;
        $order_dir = $request->order_dir;
        $page = $request->page;

        $post = PostFilterController::getPostByLocationOrSkill($skill, $location);

        $post = PostFilterController::sortPost($post, $order_by, $order_dir);
        $post = MyHelpers::paginateCollection($post, 10);
        return response()->json($post);

    }

    public function getPostByLocationOrSkill($skill, $location)
    {
        if (($skill === 'all') and ($location === 'all')) {
            $post = Post::all();
        } elseif (($skill === 'all') or ($location === 'all')) {
            if ($skill === 'all') {
                $post = Location::findOrFail($location)->posts;
            }
            if ($location === 'all') {
                $post = Skill::findOrFail($skill)->posts;
            }

        } else {
            $post = Location::findOrFail($location)->posts->where('id_skill', '=', $skill);
        }

        return $post;

    }

    public function sortPost( $post, $order_by, $order_dir)
    {
        if (($order_by != null) and ($order_by != "")) {
            if ($order_dir == 'asc') {
                $post = $post->sortBy($order_by)->values()->all();
            } elseif ($order_dir == 'dec') {
                $post = $post->sortByDecs($order_by)->values()->all();
            }
        }
        return $post;
    }

}
