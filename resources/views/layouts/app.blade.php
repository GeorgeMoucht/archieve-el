<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @livewireStyles

</head>
<body>
    <header>
        <!-- Header content -->
    </header>

    <nav>
        <!-- Navigation content -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
    </footer>

    @livewireScripts
</body>
</html>
