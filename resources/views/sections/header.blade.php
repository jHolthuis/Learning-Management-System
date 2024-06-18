{{-- header of every page --}}
<header class="text-gray-200 bg-gray-900 shadow-md fixed left-0 top-0 z-49 w-full p-4 font-display
    space-x-12">

    {{-- hacklab image --}}
    <a class="inline-flex" href="{{ url('/') }}">
        <img src="{{ asset('images/hacklab-logo.svg') }}" alt="logo" style="height: 40px";></a>

    {{-- logout button --}}
    <a class="transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out hover:-translate-y-1 hover:scale-110
            ml-12"
        href="logout">Logout

        {{-- go to account information --}}
        <a class="{{ request()->is('account_info', 'edit_profile') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
            hover:-translate-y-1 hover:scale-110"
            href="{{ route('account_info') }}">My Account

            {{-- go to schedule page --}}
            <a class="{{ request()->is('scedule') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                hover:-translate-y-1 hover:scale-110"
                href="{{ route('show_schedule') }}">Schedule

                {{-- go to availability page --}}
                <a class="{{ request()->is('availability') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                    hover:-translate-y-1 hover:scale-110"
                    href="{{ route('availability_input') }}">Availability input

                    <a class="{{ request()->is('availability_index') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                    hover:-translate-y-1 hover:scale-110"
                        href="{{ route('availability_index') }}">Availability index


                        {{-- go to changes page --}}
                        <a class="{{ request()->is('make_changes') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                        hover:-translate-y-1 hover:scale-110"
                            href="{{ route('make_changes') }}">Changes

                            {{-- go to create a new account page --}}
                            <a class="{{ request()->is('new_user') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                            hover:-translate-y-1 hover:scale-110"
                                href="{{ route('new_user') }}">Create new account

                                {{-- go to the home page --}}
                                <a class="{{ request()->is('/') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                                hover:-translate-y-1 hover:scale-110"
                                    href="/">Home</a>
</header>
