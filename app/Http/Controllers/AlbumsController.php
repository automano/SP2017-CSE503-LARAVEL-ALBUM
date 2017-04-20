<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Album;
use Image;

class AlbumsController extends Controller
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
    public function create()
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
        // Data validator
        $this->validate($request, [
            'name' => 'required|max:50',
        ]);

        // Data store
        $album = Album::create([
            'user_id'=>$request->user_id,
            'name' => $request->name,
            'intro' => $request->intro,
            'password' => $request->password,
        ]);

        // go back
        session()->flash('success', 'Album created successfully');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get data of album
        $album = Album::findOrFail($id);

        // get data of photos
        $photos = $album->photos()->orderBy('created_at', 'desc')->paginate(20);

        // return
        return view('albums.show', compact(['album','photos']));
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
        // data validation
        $this->validate($request, [
            'name' => 'required|max:50',
        ]);

        // update new data
        $album = Album::findOrFail($id);
        $album->update([
            'name' => $request->name,
            'intro' => $request->intro,
        ]);

        // upload cover
        if($request->hasFile('cover')){
            // zip cover and 
            $cover_path = "img/album/covers/" . time() . ".jpg";
            Image::make($request->cover)->resize(355, 200)->save(public_path($cover_path));
            // update album cover
            $album->update([
                'cover' => "/" . $cover_path,
            ]);
        }

        // return 
        session()->flash('success', 'Edit album successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $album = Album::findOrFail($id);
        $album->delete();

        // return
        session()->flash('success','Delete Album Successfully');
        return redirect()->route('home');
    }
}
