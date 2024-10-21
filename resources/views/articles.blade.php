<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
    <!-- Bootstrap 5.3.3 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- Custom CSS --}}
    {{-- <link rel="stylesheet" href="../css/app.css"> --}}
</head>
<body>
    <header class="d-flex align-items-center justify-content-between p-3">
        <h1 class="text-center">{{ $title }}</h1>
        <nav>
            <ul class="d-flex align-items-center gap-3">
                @foreach ($linksHeader as $name=>$link)
                <li><a href="{{$link}}">{{ $name }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
    <main>
        <h2 class="text-center">{{ $description }}</h2>
    </main>

</body>
</html>
