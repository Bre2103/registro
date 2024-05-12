<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index')->with('users', $users);
    }

    public function create()
    {
        return view('registro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string|unique:users',
            'pass' => 'required|string',
        ]);

        //User::create($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->pass = $request->pass;
        $user->save();

        
        return redirect()->route('user.index')->with('success', 'Usuario creado exitosamente.');
    }

   

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
       
        $user = User::findOrFail($id);
        //$user->update($request->all());
        $user->name = $request->name;
        $user->username = $request->username;
        $user->save();

        return redirect()->route('user.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}