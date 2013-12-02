@extends('templates.master')


@section('body')
<form role="form">



{{ Form::open(array('action'=>'ContentController@store')) }}

    <div class="form-group">
{{ Form::label('paragraph', 'Paragraph') }}
</div>

    <div class="form-group">
{{ Form::textarea('paragraph', 'Enter Paragraph', array('class'=>'form-control','rows'=>'3', 'cols'=>'14')) }}
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

{{ Form::close() }}

</div>
    </form>
@stop