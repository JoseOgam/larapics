<?php

namespace App\Http\Controllers;

use App\Upload;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([

            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $image = time().'.'.request()->filename->getClientOriginalExtension();
        request()->filename->move(public_path('images'), $image);

        $upload = new Upload();
        $upload->file = $image;
        $upload -> save();
        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$image);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Upload $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Upload $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Upload $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Upload $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
