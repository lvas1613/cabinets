@extends('templates.master')

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



<script>
    $("p").css({textAlign:"justify"});
</script>
@stop
