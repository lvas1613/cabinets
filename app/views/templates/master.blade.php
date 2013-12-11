<!DOCTYPE html>


<html>

<?php
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
?>

@include('templates.head')
<body>
<div class="wrapper">
    <div class="masthead">

       <a href=" http://cabinets.local/home"> {{ HTML::image('assets/imgs/masthead.jpg', 'logo') }}</a>
    </div>


    @yield('navigation')
    @yield('body')

    @yield('categories')



    <footer>
        @section('footer')
        <p>P.O. Box 279 Topanga, California 90290 Phone/Fax: 310/455-1310 {{ HTML::mailto('curtisvarner@mac.com', 'curtisvarner@mac.com')}}

        @if(!Auth::check())

        <small>{{ HTML::link('users/login', 'Admin') }}</small>
        @else
        <small>{{ HTML::link('users/logout', 'Logout') }}</small>
        @endif


        </p>
        @show
    </footer>
</div>


</body>
</html>
