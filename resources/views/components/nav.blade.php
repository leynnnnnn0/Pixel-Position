<nav class="flex items-center h-16 bg-black w-full border-b border-white/10">
    <a href="/"> <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo"></a>
    <section class="flex flex-1 items-center justify-center gap-4">
        <a class="text-white font-bold text-sm"
           href="/jobs">Jobs</a>
        <a class="text-white font-bold text-sm"
           href="/jobs">Career</a>
        <a class="text-white font-bold text-sm"
           href="/jobs">Salaries</a>
        <a class="text-white font-bold text-sm"
           href="/jobs">Companies</a>
    </section>
    @auth
        <div class="flex items-center gap-4">
            <a class="text-white font-bold text-sm"
               href="/jobs/create">Post a Job</a>

            <form action="/logout" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Log out</button>
            </form>
        </div>
    @endauth

    @guest
        <a class="text-white font-bold text-sm"
           href="/register">Register</a>
        <a class="text-white font-bold text-sm"
           href="/login">Login</a>
    @endguest
</nav>
