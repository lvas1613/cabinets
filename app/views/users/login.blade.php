{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
<h2 class="form-signin-heading">Please Login</h2>
<div>
    {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
</div>

<div>
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}

</div>

<div>
    {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))}}
</div>


{{ Form::close() }}
