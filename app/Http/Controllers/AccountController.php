<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\CreateUserRequest;
use App\Http\Requests\Auth\UpdateUserRequest;
use App\Mail\NewUserCreated;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    }

    // get all the roles from the database
    public function showRoles(Request $request)
    {
        $roles_table = Role::all();

        // return to the create a new user page with the roles available
        return view('pages.new_user', [
            'roles' => $roles_table,
        ]);
    }
    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('create_user');
    }

    /**
     * Store a newly created user in the DB and send a mail to the new user
     */
    public function store(CreateUserRequest $request): RedirectResponse
    {
        // save input in the DB
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->phone_number = $request->phone_number;
        $users->date_of_birth = $request->date_of_birth;
        $users->home_town = $request->hometown;
        $users->start_date = $request->start_date;
        $users->role_id = $request->role_id;
        $users->loan_laptop = $request->loan_laptop;
        $users->save();

        // mail to the new user
        Mail::to($users->email)->send(new NewUserCreated($users));

        // return to welcome page with succes message
        return redirect('/')->with('succes', 'Account has been made!');
    }

    /**
     * Get the user that is asked for, else get the logged in user
     */
    public function show(?User $reqUser)
    {
        $user = $reqUser->exists ? $reqUser : auth()->user();

        return view('pages.account_info', compact('user'));
    }
    
    // get the users name to show at the edit profile page
    public function edit_profile()
    {
        return view('pages.edit_profile', ['user' => Auth::User()]);
    }

    /**
     * Show the form for editing the users information page.
     */
    public function update(UpdateUserRequest $request):RedirectResponse
    {
        /** @var /app/User $user*/
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->date_of_birth = $request->date_of_birth;
        $user->home_town = $request->home_town;
        if ($request->hasFile('profile_picture')) {
            $filename = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $filename;
        }
        $user->save();

        return redirect('account_info')->with('success', 'Your profile has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
