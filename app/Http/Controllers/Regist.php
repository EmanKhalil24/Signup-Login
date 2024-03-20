<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\SignUp;
use Illuminate\Support\Facades\Hash;

class Regist extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sign = SignUp::all();
        return view('signup', compact('sign'));
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
        $validatedData = $request->validate([
            'username' => 'required|string|unique:sign_ups',
            'password' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string|unique:sign_ups',
        ]);
    
        if (SignUp::where('username', $validatedData['username'])->exists()) {
            return response()->json(['message' => 'Username already exists'], 422);
        }
    
        if (SignUp::where('email', $validatedData['email'])->exists()) {
            return response()->json(['message' => 'Email already exists'], 422);
        }
    
        $hashedPassword = Hash::make($validatedData['password']);
    
        $user = SignUp::create([
            'username' => $validatedData['username'],
            'password' => $hashedPassword,
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ]);
    
        return response()->json(['message' => 'User registered successfully'], 201);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
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

    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
    
        $user = SignUp::where('username', $credentials['username'])->first();
    
        if (!$user) {
            return response()->json(['error' => 'Username is not Exist.'], 201);
        }
    
        if (!Hash::check($credentials['password'], $user->password)) {
            return response()->json(['error' => 'Password is not correct.'], 201);
        }

        return response()->json(['message' => 'User Logged successfully!'], 201);
    }
    
}
