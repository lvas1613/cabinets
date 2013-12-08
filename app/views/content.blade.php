@extends('templates.master')

@section('navigation')
<div class="navbarstyle">
<ul class="list-inline">
@foreach(Category::orderBy('id','ASC')->get() as $cat)
<li><a class="fontchange" href="{{$cat->name}}"> {{ ucfirst($cat->name) }}</a></li>
@endforeach

    @if(!Auth::check())


    <li>{{ HTML::link('users/login', 'Admin Area', array('class'=>'fontchange') )}}</li>
    @else
    <li>{{ HTML::link('content/create', 'Add Content',  array('class'=>'fontchange')) }}</li>
    <li>{{ HTML::link('images/create', 'Add Image',  array('class'=>'fontchange')) }}</li>
    <li>{{ HTML::link('users/logout', 'Logout',  array('class'=>'fontchange')) }}</li>
    @endif
</ul>
</div>
@stop


@section('body')

<div class="content">
@foreach($p as $a)
<p class="{{$a->cat_name.'-content'}}">{{$a->paragraph}}</p>
@endforeach

@if (isset($a) && $a->cat_name == 'about')
    @include('slideshow.about')
   {{ HTML::script('assets/js/about.js') }}

@endif



</div><!--end of content div -->

@section('categories')


<div id="categories">

        <?php

        foreach($images as $image):

            echo '<div class="boxes_categories"><a href="http://cabinets.local/assets/imgs/'.$image->filename.'" rel="lightbox-'.$image->cat_name.'" title="'.$image->caption.'"><img src="http://cabinets.local/assets/imgs/thumbs/'.$image->thumbs.'" /></a></div>';



        endforeach;
        ?>


</div>



@stop




<script>
    $("p").css({textAlign:"justify"});
</script>
@stop


