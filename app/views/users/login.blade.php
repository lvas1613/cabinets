@extends ('templates.master')

@section('body')


@if(Session::has('message'))
<div class="message-success"<h1>{{Session::get('message') }}</h1></div>
@endif

<div class="container">
{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
<h2 class="form-signin-heading">Please Login</h2>
<div>
    {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
</div>

<div>
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}

</div>

<div>
    {{ Form::submit('Login', array('class'=>'btn default'))}}
</div>


{{ Form::close() }}
</div>
@stop