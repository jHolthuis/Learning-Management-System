<header class="text-gray-200 bg-gray-900 shadow-md fixed left-0 top-0 z-49 w-full p-4 font-display
    space-x-12">
    <a class="inline-flex" href="{{ url('/') }}">
        <img src="{{ asset('images/hacklab-logo.svg') }}" alt="logo" style="height: 40px";></a>
    <a class="transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out hover:-translate-y-1 hover:scale-110
            ml-12"
        href="logout">Logout
        <a class="{{ request()->is('account_info') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
            hover:-translate-y-1 hover:scale-110"
            href="{{ route('account_info') }}">My Account
            <a class="{{ request()->is('new_user') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                hover:-translate-y-1 hover:scale-110"
                href="{{ route('new_user') }}">Create new account
                <a class="{{ request()->is('/') ? 'text-hacklab_green' : 'text-gray-200' }} transition font-bold float-right hover:text-hacklab_green delay-150 ease-in-out
                    hover:-translate-y-1 hover:scale-110"
                    href="/">Home</a>
</header>
