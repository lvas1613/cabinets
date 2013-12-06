<section>

    <ul class="rslides" id="slide1">
       <li>{{HTML::image('assets/imgs/f_dining_room_table.jpg') }}</li>
        <li>{{HTML::image('assets/imgs/f_floating_desk.jpg') }}</li>
        <li>{{HTML::image('assets/imgs/f_glass_coffee_table.jpg') }}</li>

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