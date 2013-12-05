@extends ('templates.master')

@section('body')

<div class="boxwrap">
    <div class="home-box">
    {{ HTML::image('assets/imgs/f_coffee_table.jpg', 'furniture')}}
    </div>

    <div class="home-box">
        {{ HTML::image('assets/imgs/furniture_text.jpg', 'furniture')}}
    </div>

    <div class="home-box">
        {{ HTML::image('assets/imgs/f_jewelery_box.jpg', 'furniture')}}
    </div>

    <div class="home-box">
        {{ HTML::image('assets/imgs/f_armoire.jpg', 'cabinetry')}}
    </div>


    <div class="home-box">
        {{ HTML::image('assets/imgs/cabinetry_text.jpg', 'cabinetry')}}
    </div>

    <div class="home-box">
        {{ HTML::image('assets/imgs/f_wall_unit.jpg', 'cabinetry')}}
    </div>

    <div class="home-box">
        {{ HTML::image('assets/imgs/f_kitchen_cabinet.jpg', 'kitchen')}}
    </div>

    <div class="home-box">
        {{ HTML::image('assets/imgs/kitchen_text.jpg', 'kitchen')}}
    </div>

    <div class="home-box">
        {{ HTML::image('assets/imgs/f_vanity_bathroom.jpg', 'kitchen')}}
    </div>




</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">
    $(document).ready(function(){
        alert("prueba");
    });
</script>
@stop