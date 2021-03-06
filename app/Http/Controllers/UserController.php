<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function me(Request $request, User $user)
    {
        // check if currently authenticated user is the owner of the book
        $id = auth()->user()->accountable_id;
        $user = User::findOrFail($id); 
        // $data = $request->get('name','CV','cover_letter','image');

        // collect($data);
        $user->fill([
            "name" => $request->name,
            "CV" => $request->CV,
            "cover_letter" => $request->cover_letter,
            "image" => $request->image,
        ]);
        $user->save();
        // return response()->json($request->has("name"));
        return new UserResource($user);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
