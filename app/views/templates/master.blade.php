<!DOCTYPE html>
<html>

@include('templates.head')
<body>
<div class="wrapper">
    <div class="masthead">

        {{ HTML::image('assets/imgs/masthead.jpg', 'logo') }}
    </div>


    @include('templates.navigation')

    @yield('body')



    @yield('categories')

    <footer>
        @section('footer')
        <p>P.O. Box 279 Topanga, California 90290 Phone/Fax: 310/455-1310 {{ HTML::mailto('curtisvarner@mac.com', 'curtisvarner@mac.com')}}</p>
        @show
    </footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->




<!-- Include all compiled plugins (below), or include individual files as needed -->






</body>
</html>
