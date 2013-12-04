@extends('templates.master')

@section('body')


<div class="content">
@foreach($p as $a)
<p>{{$a->paragraph}}</p>
@endforeach
</div><!--end of content div -->
@stop

