<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view("perfil", ["users"=>User::all()]);
        $userss['users']=User::all();
        return view("perfil",$userss);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view("editarperfil", ["user" => $user,]);
        $users= User::findOrFail($id);
        return view("editarperfil",compact("users"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=request()->except(['_token','_method']);
        
        if ($request->hasFile('Usu_foto')) {
            $users = User::findOrFail($id);

            Storage::delete('public/img/foto/'.$users->Usu_foto);

            $user['Usu_foto']=$request->file('Usu_foto')->store('foto','public');
        }
        
        User::where('id','=',$id)->update($user);

        $users= User::findOrFail($id);
        return view("editarperfil",compact("users"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user -> delete();
        return redirect()->route("users.index")->with(["menssaje" => "Usuario eliminado"]);
    }
}
