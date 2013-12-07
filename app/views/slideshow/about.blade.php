<section>




    <ul class="rslides" id="slide1">



        @foreach($handle as $image)
        <li>{{ HTML::image('assets/imgs/slideshow/'.$image) }}</li>
        @endforeach


    </ul>
</section>

<script>
    $(function(){
        $("#slide1").responsiveSlides({
            nav:false,
            auto:true
        });
    });
</script>