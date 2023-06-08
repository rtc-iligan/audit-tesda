<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $you = auth()->user();
       $users = User::where('id','!=',1)->where('center_id',1)->get();
       $roles = DB::table('roles')->where('id','!=',1)->get();
       return view('users.index',compact('roles','you','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**ssws
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          
            'email'      => 'required|email|max:256|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $user = new User;
        $user->name       = $request->input('name');
        $user->email      = $request->input('email');
        $user->center_id      = $request->input('center_id');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $user->assignRole($request->role);
        
        return redirect()->back()->with('success','User added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
