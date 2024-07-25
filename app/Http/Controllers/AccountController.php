<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\CreateUserRequest;
use App\Http\Requests\Auth\UpdateUserRequest;
use App\Mail\NewUserCreated;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AccountController extends Controller
{
    /**
     * Display a listing of all the users.
     */
    public function index()
    {
        $all_users = User::with('role')->get();

        return view('pages.user_list', compact('all_users'));
    }

    // get all the roles from the database
    public function showRoles()
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
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone_number = $request->phone_number;
        $user->date_of_birth = $request->date_of_birth;
        $user->home_town = $request->hometown;
        $user->start_date = $request->start_date;
        $user->role_id = $request->role_id;
        $user->loan_laptop = $request->loan_laptop;
        $user->save();

        // mail to the new user
        Mail::to($user->email)->send(new NewUserCreated($user));

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

        // update the post
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
