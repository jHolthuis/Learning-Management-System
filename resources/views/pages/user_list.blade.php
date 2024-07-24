{{-- start the section for content(see the layout app.blade) --}}
@extends('layout.app')
@section('content')

    {{-- current page for main menu --}}
    <?php
    use Carbon\Carbon;
    
    $currentPage = 'user_list';
    ?>

    {{-- if any errors --}}
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- headline text --}}
    <h1 class="text-white text-7xl pl-16 pb-14 pt-6">All members of Hacklab</h1>

    {{-- table class --}}
    <table class=" table bg-gray-900/50 text-gray-50 border-2 border-hacklab_green p-8 ml-4 w-5/12 h-6/6 text-lg">
        {{-- table headers --}}
        <thead>
            <tr>
                <th>Picture</th>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Date of Birth</th>
                <th>Home town</th>
                <th>Start date</th>
                <th>Loan laptop</th>
            </tr>
        </thead>
        <tbody>
            {{-- print all the available times for the user --}}
            @foreach ($all_users as $user)
                <tr class="border-2 border-hacklab_green">
                    <td> <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile"
                            style="width: 80px; height: 100px; position:relative; margin: 5mm">
                    </td>
                    <td class="text-center pl-10">{{ $user->name }}</td>
                    <td class="text-center pl-10 pr-10 ">{{ $user->role_id }}</td>
                    <td class="text-center pl-10 pr-10">{{ $user->email }}</td>
                    <td class="text-center pl-10 pr-10">{{ $user->phone_number }}</td>
                    <td class="text-center pl-10 pr-10">{{ Carbon::parse($user->date_of_birth)->format('d/m/Y') }}</td>
                    <td class="text-center pl-10 pr-10">{{ $user->home_town }}</td>
                    <td class="text-center pl-10 pr-10">{{ Carbon::parse($user->start_date)->format('d/m/Y') }}</td>
                    <td class="text-center pl-10 pr-10">
                        @if ($user->loan_laptop == 0)
                            {{ 'No' }}
                        @else
                            {{ 'Yes ' }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
