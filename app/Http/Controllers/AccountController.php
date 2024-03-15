<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // $user = new User();
        $validated = $request->safe()->only([
            'name', 'email', 'password', 'phone_number', 'date_of_birth', 'home_town', 'start_date']);
        $validated = $request->safe()->except([
            'name', 'email', 'password', 'phone_number', 'date_of_birth', 'home_town', 'start_date']);
        // $user->name = $validated_data['name'];
        // $user->email = $validated_data['email'];
        // $user->password = $validated_data['password'];
        // $user->phone_number = $validated_data['phone_number'];
        // $user->date_of_birth = $validated_data['date_of_birth'];
        // $user->hometown = $validated_data['home_town'];
        // $user->start_date = $validated_data['start_date'];
        // $user->save();

    
        return redirect('/store')->with('succes', 'Account has been made!');
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
