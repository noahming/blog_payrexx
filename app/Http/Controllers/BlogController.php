<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
        $newBlog = new Blog();
        $newBlog->user_id = 1;
        //$_SESSION['userId']
        $newBlog->title = Input::get('title');
        $newBlog->desc_short = Input::get('shortDesc');
        $newBlog->desc_long = Input::get('longDesc');
        $newBlog->date = date('Y-m-d');

        $newBlog->save();

        if ($request->file('image')->isValid()) {
            $newImage = new Image();
            $newImage->blog_id = $newBlog->id;
            $newImage->filename = pathinfo(Input::file('image'), PATHINFO_FILENAME);
            $newImage->image_type = pathinfo(Input::file('image'), PATHINFO_EXTENSION);

            $newImage->save();
            $request->file('image')->move(storage_path("app/public/images/", $newImage->filename));
            //als ich pfad mit asset zusammenstellen wollte ERROR "unable to create the "http://localhost/blog_payrexx/blog/public/images" directory
        }
        else {

        }
        header("Location: home");
        die();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        echo $request->segment(2);
        return view('post');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
