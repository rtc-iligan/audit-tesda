<?php

namespace App\Http\Controllers;

use App\Models\{Qualification,AuditType};
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qualification = Qualification::get();
        $audit = AuditType::join('centers','centers.id','audit_types.center_id')->select('audit_types.*','centers.tvi_abrv')->get();
        return view('qualifications.index',compact('qualification','audit'));
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
        $qualification = new Qualification;
        $qualification->audit_type_id      = $request->input('audit');
        $qualification->name       = $request->input('name');
        $qualification->abrv      = $request->input('abrv');
        $qualification->acc_number      = $request->input('acc_number');
        $qualification->sector       = $request->input('sector');
        $qualification->date      = $request->input('date');
       // dd($qualification);
        $qualification->save();

        return redirect()->back()->with('success','Qualification added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Qualification $qualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Qualification $qualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Qualification $qualification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Qualification $qualification)
    {
        //
    }
}
