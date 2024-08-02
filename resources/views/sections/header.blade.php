{{-- header of every page --}}
<header class="text-gray-200 bg-gray-900 shadow-md fixed left-0 top-0 z-49 w-full p-4 font-display
    space-x-6">

    {{-- hacklab image --}}
    <a class="inline-flex" href="{{ url('/') }}">
        <img src="{{ asset('images/hacklab-logo.svg') }}" alt="logo" style="height: 40px";></a>

    {{-- language flags --}}
    <a href="{{ route('locale', ['locale' => 'en']) }}" type="button"
        class="btn btn-primary {{ Session::get('locale') == 'en' ? 'active' : '' }}">English</a>
    <a href="{{ route('locale', ['locale' => 'nl']) }}" type="button"
        class="btn btn-primary {{ Session::get('locale') == 'nl' ? 'active' : '' }}">Nederlands</a>
    </div>
    {{-- logout button --}}
    @can('viewAll', App\Models\Role::class)
        <a class="transition
    font-bold float-right hover:text-hacklab_green delay-150 ease-in-out hover:-translate-y-1
    hover:scale-110 ml-12"
            href="logout">{{ __('Uitloggen') }}

            {{-- go to account information --}}
            <a class="{{ request()->is('account_info', 'edit_profile') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
        hover:-translate-y-1 hover:scale-110"
                href="{{ route('account_info') }}">{{ __('Mijn account') }}

                {{-- go to schedule page --}}
                <a class="{{ request()->is('schedule') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                hover:-translate-y-1 hover:scale-110"
                    href="{{ route('show_schedule') }}">{{ __('Rooster') }}
                @endcan

                {{-- go to the show availability page --}}
                @can('view', App\Models\Role::class)
                    <a class="{{ request()->is('availability_index') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                        hover:-translate-y-1 hover:scale-110"
                        href="{{ route('availability_index') }}">{{ __('Mijn beschikbaarheid') }}

                        <a class="{{ request()->is('user_list') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                            hover:-translate-y-1 hover:scale-110"
                            href="{{ route('user_list') }}">{{ __('Gebruikers lijst') }}
                        @endcan

                        {{-- go to changes page --}}
                        @can('view', App\Models\Role::class)
                            <a class="{{ request()->is('make_changes') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                                    hover:-translate-y-1 hover:scale-110"
                                href="{{ route('make_changes') }}">{{ __('Veranderingen') }}
                            @endcan

                            {{-- go to create a new account page --}}
                            @can('addUser', App\Models\Role::class)
                                <a class="{{ request()->is('new_user') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                                            hover:-translate-y-1 hover:scale-110"
                                    href="{{ route('new_user') }}">{{ __('Maak een nieuwe account aan') }}
                                @endcan

                                {{-- go to the home page --}}
                                @can('viewAll', App\Models\Role::class)
                                    <a class="{{ request()->is('/') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                                        hover:-translate-y-1 hover:scale-110"
                                        href="/">{{ __('Welkom pagina') }}</a>
                                @endcan

</header>
