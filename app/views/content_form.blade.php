@extends('templates.master')


@section('body')
<div id="content-form" class="content-form-layout">

{{ Form::open(array('action'=>'ContentController@store')) }}

<div class="paragraph-label">
{{ Form::label('paragraph', 'Paragraph') }}
</div>

<div class="paragraph-text">
{{ Form::textarea('paragraph') }}
</div>
{{ Form::select('cat_name', array('about'=> 'About',
                                  'furniture'=>'Furniture',
                                  'cabinetry'=> 'Cabinetry',
                                  'kitchen-bath'=> 'Kitchen and Bath',
                                  'special-projects' => 'Special Projects',
                                  'contact' => 'Contact')) }}

<div class="submit-button">
{{ Form::submit('Submit Content') }}
</div>
{{ Form::close() }}

</div>
@stop