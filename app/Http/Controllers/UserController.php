<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('detail', compact('user'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'umur' => $request->umur,
            'email' => $request->email,
            'telephone' => $request->telephone,
        ]);
        return redirect()->route('users');
    }

    public function edit($id)
    
    {
        $user = User::find($id);
        return view('edit', compact('user'));
    }

    public function update($id, Request $request)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'umur' => $request->umur,
            'email' => $request->email,
            'telephone' => $request->telephone,
        ]);
        return redirect()->route('users');
    }
    public function delete($id)
    {
        User::destroy($id);
        return redirect()->route('users');
    }
    
}
