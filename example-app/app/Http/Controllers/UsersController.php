<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = users::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required',
        ]);
        users::create($request->all());
        return redirect()->route('users.index')
            ->with('success', 'users created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = users::find($id);
        return view('users.show', compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = users::find($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required',
        ]);
        users::find($id)->update($request->all());
        return redirect()->route('users.index')
            ->with('success', 'users updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        users::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'users deleted successfully');
    }
}
