<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Role;

class UsersController extends Controller
{
    
    public function __construct(){

        $this->middleware('super_admin');
 
     }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('users.index', compact('users'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(),[
            'email' => 'required|email', 
            'role_id' => 'required',

        ]);

         $user = User::create([
            'email' => request('email'),
            'role_id' => request('role_id'),
            ]);

        return redirect('/users')->with('success','Account created successfully!'); 
           
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
        $user = User::findOrFail($id);
        $role_id = request('role_id');
        $user->update(['role_id' => $role_id]);
        return redirect()->back()->with('success','Role update successfully!');       
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
        $user = User::findOrFail($id);

        $user->delete();

        return redirect('/users')->with('success','User delete successfully!'); 
        #return Response::json($account);
    
    }

}
