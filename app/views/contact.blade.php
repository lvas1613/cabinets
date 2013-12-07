@extends('templates.master')


@section('navigation')
<div class="navbarstyle">
    <ul class="list-inline">
        @foreach(Category::orderBy('id','ASC')->get() as $cat)
        <li><a class="fontchange" href="{{$cat->name}}"> {{ ucfirst($cat->name) }}</a></li>
        @endforeach
    </ul>
</div>
@stop



@section('body')

<address class="address">
    <strong>CURTIS VARNER FURNITURE &amp; CABINETRY</strong><br>
    P.O. Box 279<br>
    Topanga, California 90290<br>
    Phone/Fax: 310/455-1310
</address>


@stop