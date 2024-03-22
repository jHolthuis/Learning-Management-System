<header class="text-gray-200 bg-gray-900 shadow-md fixed left-0 top-0 z-49 w-full p-4 font-display
    space-x-12">
    <a href="/">Hacklab logo
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button
                class="border-none bg-hacklab_background rounded-lg tranistion ml-4 p-1 ease-in-out
            delay-150 duration-200 hover:bg-hacklab_green hover:text-gray-200 float-right"
                type="submit">Logout</button>
        </form>
        <a class="transition float-right hover:text-hacklab_green delay-150 ease-in-out
            hover:-translate-y-1 hover:scale-110 <?php if ($currentPage == 'create_user') {
                echo 'text-hacklab_green';
            } ?>"
            href="new_user">Create new account
            <a class="transition float-right hover:text-hacklab_green delay-150 ease-in-out
                hover:-translate-y-1 hover:scale-110 <?php if ($currentPage == 'home') {
                    echo 'text-hacklab_green';
                } ?>"
                href="/">Home</a>
</header>
