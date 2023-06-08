<?php

namespace App\Http\Controllers;

use App\Models\{AuditType,Center};
use Illuminate\Http\Request;

class AuditTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $audit = AuditType::join('centers','centers.id','audit_types.center_id')->select('centers.tvi_name','audit_types.name')->get();
        $center = Center::where('id','!=',1)->get();
        return view('audits.index',compact('audit','center'));
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
        $audit=new AuditType();
        $audit->name=$request->name;
        $audit->center_id=$request->center;
       
        $audit->save();
        return redirect()->back()->with('success','Successfully Stored Data!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AuditType $auditType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AuditType $auditType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AuditType $auditType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AuditType $auditType)
    {
        //
    }
}
