<!DOCTYPE HTML>
<html>
<head>
    <link href="{{asset('CSS/style.css')}}" type="text/css" rel="stylesheet">
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <div class="container">
            <h1>
                Boba Tea Store
                <span class="subheading">(Customize your own boba!)</span>
            </h1>
            <nav>
                <ul>
                    <li><a href="/bobas">Home</a></li>
                    <li><a href="/bobas/create">Add new boba</a></li>
                    <li><a href="/bobas/about">About</a></li>
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