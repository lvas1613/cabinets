@extends ('templates.master')


@section('navigation')
<div class="navbarstyle">
    <ul class="list-inline">
        @foreach(Category::orderBy('id','ASC')->get() as $cat)
        <li><a class="fontchange" href="http://cabinets.local/content/{{$cat->name}}"> {{ ucfirst($cat->name) }}</a></li>
        @endforeach




    </ul>
</div>
@stop



@section('body')

<div class="boxwrap">
    <div class="home-box">
    <a href="content/furniture">
    {{ HTML::image('assets/imgs/f_coffee_table.jpg', 'furniture')}}
    </a>
    </div>

    <div class="home-box">
        <a href="content/furniture"> {{ HTML::image('assets/imgs/furniture_text.jpg', 'furniture')}}</a>
    </div>

    <div class="home-box">
       <a href="content/furniture"> {{ HTML::image('assets/imgs/f_jewelery_box.jpg', 'furniture')}}</a>
    </div>

    <div class="home-box">
       <a href="content/cabinetry"> {{ HTML::image('assets/imgs/f_armoire.jpg', 'cabinetry')}}</a>
    </div>


    <div class="home-box">
        <a href="content/cabinetry"> {{ HTML::image('assets/imgs/cabinetry_text.jpg', 'cabinetry')}}</a>
    </div>

    <div class="home-box">
       <a href="content/cabinetry"> {{ HTML::image('assets/imgs/f_wall_unit.jpg', 'cabinetry')}}</a>
    </div>

    <div class="home-box">
       <a href="content/kitchen-bath"> {{ HTML::image('assets/imgs/f_kitchen_cabinet.jpg', 'kitchen')}}</a>
    </div>

    <div class="home-box">
       <a href="content/kitchen-bath"> {{ HTML::image('assets/imgs/kitchen_text.jpg', 'kitchen')}}</a>
    </div>

    <div class="home-box">
       <a href="content/kitchen-bath"> {{ HTML::image('assets/imgs/f_vanity_bathroom.jpg', 'kitchen')}}</a>
    </div>




</div>


@stop



