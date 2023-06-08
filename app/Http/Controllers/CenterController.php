<?php

namespace App\Http\Controllers;

use App\Models\Center;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $center = Center::where('id', '!=' ,1)->get();
        return view('centers.index', compact('center'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $center=new Center();
        $center->tvi_name=$request->tvi_name;
        $center->tvi_abrv=$request->tvi_abrv;
        $center->tvi_location=$request->tvi_location;
        $center->tvi_manager=$request->tvi_manager;
        $center->tvi_manager_contact=$request->tvi_manager_contact;
        $center->tvi_person=$request->tvi_person;
        $center->tvi_person_contact=$request->tvi_person_contact;
        if( $request->file('tvi_image') != null){
            $picture = $request->file('tvi_image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/center', $picture);
            $center->tvi_image = $url; 
        }
        $center->save();
        return redirect()->back()->with('success','Successfully Stored Data!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Center $center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Center $center)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Center $center)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Center $center)
    {
        //
    }
}
