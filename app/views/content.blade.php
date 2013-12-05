@extends('templates.master')

@section('body')


<div class="content">
@foreach($p as $a)
<p class="{{$a->cat_name.'-content'}}">{{$a->paragraph}}</p>
@endforeach


<script type="text/javascript">

    $(document).ready(function(){
        $("a").click(function(event){
            alert("thanks");
        });
    });

</script>

    <script>

        $( document ).ready(function() {
            $( "a" ).click(function( event ) {
                alert( "The link will no longer take you to jquery.com" );
                event.preventDefault();
            });
        });

    </script>
</div><!--end of content div -->
@stop

