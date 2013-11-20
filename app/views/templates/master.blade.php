<!DOCTYPE html>
    <html lang="en">
        <head>

            <meta charset="utf-8" />
            <title></title>
            @section('head')
            <link rel="stylesheet" href="css/style.css" type="text/css" />
            @show
        </head>

        <body>
        @include('templates.navigation')
        @yield('body')

        <footer>
            @section('footer')
            <p>Copyright &copy; 2013</p>
            @show
        </footer>

        </body>

    </html>