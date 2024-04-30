<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showRoles(Request $request)
    {
        $roles_table = Role::all();

        return view('pages.new_user', [
            'roles' => $roles_table,
        ]);
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
        $validated = new User;
        $validated->name = $request->name;
        $validated->email = $request->email;
        $validated->password = $request->password;
        $validated->phone_number = $request->phone_number;
        $validated->date_of_birth = $request->date_of_birth;
        $validated->home_town = $request->hometown;
        $validated->start_date = $request->start_date;
        $validated->role_id = $request->role_id;
        $validated->loan_laptop = $request->loan_laptop;
        $validated->save();

        return redirect('/')->with('succes', 'Account has been made!');
    }

    /**
     * Display the specified resource.
     */

     public function show()
    {
        if(Auth::check()) {
            $name = Auth::user()->name;
        
        return view('pages.welcome', compact('name'));
        } else {
            return redirect()->route('login');
        }
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
