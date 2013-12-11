@extends('templates.master')

@section('navigation')
<div class="navbarstyle">
    <ul class="list-inline">
        @foreach(Category::orderBy('id','ASC')->get() as $cat)
        <li><a class="fontchange" href="http://cabinets.local/content/{{$cat->name}}"> {{ ucfirst($cat->name) }}</a></li>
        @endforeach

        @if(!Auth::check())

        <li>{{ HTML::link('users/login', 'Admin Area',  array('class'=>'fontchange')) }}</li>
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

{{ Form::open(array('action'=>'ContentController@store')) }}

<div class="form-group">
{{ Form::label('paragraph', 'Enter a Paragraph') }}
</div>

<div class="form-group">
{{ Form::textarea('paragraph', null, array('class'=>'form-control','rows'=>'3', 'cols'=>'14')) }}
</div>

<div class="form-group">
{{ Form::select('cat_name', array('about'=> 'About',
                                  'furniture'=>'Furniture',
                                  'cabinetry'=> 'Cabinetry',
                                  'kitchen-bath'=> 'Kitchen and Bath',
                                  'special-projects' => 'Special Projects',
                                  'contact' => 'Contact')) }}

</div>

<div class="form-group">
{{ Form::submit('Submit Content', array(
        'class'=>'btn btn-default')) }}
 </div>
{{ Form::close() }}

</div>
@stop