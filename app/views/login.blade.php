@extends ('templates.master')

@section('body')

<form class="form-inline" method="post" action="login">
        <h2 class="">Please sign in</h2>

        <div class="form-group">
            <label class="sr-only" for="email">Email Address:</label>

                <input type="email" id="email" class="form-control" name="email" placeholder="Email address" value="">

        </div>


        <div class="fom-group ">
            <label class="sr-only" for="password">Password:</label>

                <input type="password" id="password" class="form-control" name="password" placeholder="Password" value="">

        </div>


    <div class="checkbox">
        <label>
            <input type="checkbox"> Remember me
        </label>
    </div>
    <div>
            <button type="submit" class="btn btn-default">Sign in</button>
    </div>

    </form>

@stop
