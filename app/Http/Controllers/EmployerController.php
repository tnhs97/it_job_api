<?php

namespace App\Http\Controllers;
use App\Employer;
use App\Http\Resources\Employer as EmployerResource;

use Illuminate\Http\Request;

class EmployerController extends Controller
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
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function me(Request $request)
    {
        // check if currently authenticated employer is the owner of the book
        $id = auth()->user()->accountable_id;
        $employer = Employer::findOrFail($id); 
        // $data = $request->get('name','CV','cover_letter','image');

        // collect($data);
        $employer->fill([
            "name" => $request->name,
            "Description" =>$request->description,
            "id_location" => $request->id_location,
            "url_avatar" => $request->url_avatar,
            "url_bia" => $request->url_bia,
        ]);
        $employer->save();
        // return response()->json($request->has("name"));
        return new EmployerResource($employer);

    }
}
