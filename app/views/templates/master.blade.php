<!DOCTYPE html>
<html>
<head>
    <title></title>
    @section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="masthead">

        {{ HTML::image('assets/imgs/masthead.jpg', 'logo') }}
    </div>


    @include('templates.navigation')
    @yield('body')

    <footer>
        @section('footer')
        <p>P.O. Box 279 Topanga, California 90290 Phone/Fax: 310/455-1310 {{ HTML::mailto('curtisvarner@mac.com', 'curtisvarner@mac.com')}}</p>
        @show
    </footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->




<!-- Include all compiled plugins (below), or include individual files as needed -->


{{ HTML::script('assets/js/bootstrap.js') }}



</body>
</html>






















