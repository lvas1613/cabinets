<head>

    <title>{{ucfirst($title)}} </title>
    <link href="http://cabinets.local/assets/imgs/favico.png" rel="icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

    {{ HTML::script('assets/js/jquery.js/') }}
    {{ HTML::script('assets/js/bootstrap.js') }}
    {{ HTML::script('assets/js/slimbox2.js') }}
    {{ HTML::script('assets/js/autoload.js') }}
    {{ HTML::script('assets/js/jquery-ui-1.10.3.custom.min.js') }}
    {{ HTML::style('assets/js/ui-lightness/jquery-ui-1.10.3.custom.css') }}


    {{ HTML::style('assets/css/slimbox2.css') }}
    {{ HTML::style('assets/css/bootstrap.css') }}

    @if(isset($a) && $a->cat_name == 'about')

    {{ HTML::style('assets/css/responsiveslides.css') }}
    {{ HTML::script('assets/js/responsiveslides.min.js') }}
    {{ HTML::script('assets/js/about.js') }}

    @endif

    {{ HTML::style('assets/css/style.css')}}



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>