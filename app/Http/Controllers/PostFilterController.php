<?php

namespace App\Http\Controllers;

use App\Location;
use App\Post;
use App\Skill;
use Illuminate\Http\Request;
use App\Http\Helpers\MyHelpers;
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

        if ($order_dir == 'asc') {
            $post = $post->sortBy($order_by)->values()->all();
        } else {
            $post = $post->sortByDecs($order_by)->values()->all();
        }
        $post = MyHelpers::paginateCollection($post,2);
        return response()->json($post);

    }

    public function getPostByLocationOrSkill(string $skill, string $location)
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

    public function paginateCollection($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (\Illuminate\Pagination\Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof \Illuminate\Support\Collection ? $items : \Illuminate\Support\Collection::make($items);
        return new \Illuminate\Pagination\LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

}
