<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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

        $new['name'] =  $request->name;
        $new['email'] = $request->email;
        $new['password'] = bcrypt($request->password);

        $user = User::create($new);

        $usuarios = User::all();

        return view('admin.users' , compact('usuarios'));
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
        $user = User::where('id' , $id)->first();
        return view('users.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id){

         $user = User::where('id' , $id)->first();
        return view('users.edit' , compact('user'));

    }
    public function guardar(Request $request, $id)
    {
        $new['name'] =  $request->name;
        $new['email'] = $request->email;
        $new['password'] = bcrypt($request->password);

        $user = User::find($id);
        $user->update($new);
        $user->save();

        $usuarios = User::all();

        return view('admin.users' , compact('usuarios'));
    }

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
        $user = User::find($id)->delete();
        $usuarios = User::all();

        return view('admin.users' , compact('usuarios'));
    }
}
