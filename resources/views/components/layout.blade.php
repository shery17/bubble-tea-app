<!DOCTYPE HTML>
<html>
<head>
    <!-- Original CSS -->
    <link href="{{asset('css/OriginalCSS.css')}}" type="text/css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('styles')
</head>
<body>
    @auth
        <div class="">
            <div class="">
                Logged in as <span class="font-bold">{{ Auth::user()->name }}</span>
            </div>
            <form method="POST" action="/logout">
                @csrf
                <button 
                    type="submit" 
                    class=""
                >
                    Logout
                </button>
            </form>
        </div>
    @endauth
    <header>
        <div class="container">
            <h1>
                Boba Tea Store
                <span class="subheading">(Customize your own boba!)</span>
            </h1>
            <nav>
                <ul>
                    <li><a href="/bobas">Home</a></li>
                    @can('admin-or-user')
                    <li><a href="/bobas/create">Add new boba</a></li>
                    @endcan
                    <li><a href="/bobas/about">About</a></li>
                    @guest
                    <li><a href="/login">Sign in</a></li>
                    @endguest
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="section-one">
            <div class="container">
                {{$slot}}
            </div>
        </section>
    </main>

</body>
</html>