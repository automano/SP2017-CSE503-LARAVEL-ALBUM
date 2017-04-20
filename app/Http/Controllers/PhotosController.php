<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Photo;

use Image;

class PhotosController extends Controller
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
        // data validation
        $this->validate($request,[
            'photo' => 'required',
        ]);

        // generate path to store photo
        $name = "photo".time();
        $src = "img/album/photos/". $name .".jpg";
        Image::make($request->photo)->save(public_path($src));

        // default name
        if($request->has('name')){
            $name = $request->name;
        }

        // store
        $photo = Photo::create([
            'user_id'=>$request->user_id,
            'album_id' => $request->album_id,
            'name' => $name,
            'intro' => $request->intro,
            'src' => "/" . $src,
        ]);

        // return
        session()->flash('success', 'Upload Successful');
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
        //
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
        // update
        $photo = Photo::findOrFail($id);
        $photo->update([
            'name' => $request->name,
            'intro' => $request->intro,
        ]);

        // return
        session()->flash('success', 'Edit Successful');
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
        $photo = Photo::findOrFail($id);
        $photo->delete();

        // return 
        session()->flash('success', 'Delete Successful');
        return back();
    }
}
