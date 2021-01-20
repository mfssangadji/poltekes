<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Redirect, Response;
use Yajra\DataTables\DataTables;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        return view('auths.users.index');
    }

    public function json_user_index(){
        $data = User::all();

        $pengguna = array(
            1 => 'Administrator',
            2 => 'Operator',
            3 => 'Guest',
        );

        $users = array();
        foreach($data as $user){
            $users[] = array(
                'id' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
                'level' => $pengguna[$user->level],
            );
        }

        return Datatables::of($users)->make(true);
    }

    public function json_user_edit(Request $request)
    {
        $user = User::find($request->id);
        return response()->json($user);
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
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->level = $request->level;
        $user->save();
        return response()->json($user); 
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
        if(empty($request->password)){
            $user = User::find($id);
            $user->email = $request->email;
            $user->name = $request->name;
            $user->level = $request->level;
            $user->update();
        }else{
            $user = User::find($id);
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->name = $request->name;
            $user->level = $request->level;
            $user->update();
        }

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
    }
}
