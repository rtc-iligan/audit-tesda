<?php

namespace App\Http\Controllers;

use App\Models\{Requirements, Qualification, AuditType, User, DocumentType, Center};
use Illuminate\Http\Request;
use Auth;
class RequirementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $qualification = Qualification::get();
        $auditType = AuditType::get();
        $documentType = DocumentType::get();

        return view('requirements.index', compact('qualification','auditType','documentType'));
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
        $requirements = new Requirements;
        $requirements->user      = $request->input('user');
        $requirements->doc       = $request->input('doc');
        $requirements->type      = $request->input('type');
        $requirements->quali      = $request->input('quali');
        dd($requirements);
        $requirements->save();

        return redirect()->back()->with('success','Requirements added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Requirements $requirements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requirements $requirements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Requirements $requirements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requirements $requirements)
    {
        //
    }

    public function getTviSuggestions(Request $request)
    {
        $tvi = $request->input('tvi');
        $resCenter = Center::where('tvi_name', 'LIKE', '%'.$tvi.'%')->pluck('tvi_name');
            
        return response()->json($resCenter);
        
    }
    public function getTviAudits(Request $request)
    {
        $datas = $request->input('myString');
        $resQualification = Center::where('tvi_name',$datas)->first();
        $auditQuali = AuditType::where('center_id',$resQualification->id)->get();
       
        if ($auditQuali !== null) {
            return response()->json($auditQuali);
        } else {
                
            return response()->json(null);
        }
    }
    public function getAuditQualifications(Request $request)
    {
        $datas = $request->input('myAuditType');
        
        $auditID = AuditType::where('id',$datas)->first();
        $qualification = Qualification::where('audit_type_id',$auditID->id)->get();

        return response()->json($qualification);
    }
    public function getQualificationsDocTypes(Request $request)
    {
        $datas = $request->input('myDocType');    
       
        $auditID = AuditType::where('id',$datas)->first();
        $docType = DocumentType::where('audit_type_id',$auditID->id)->get();
       
        if ($docType !== null) {
            return response()->json($docType);
        } else {
                
            return response()->json(null);
        }
    }
}
