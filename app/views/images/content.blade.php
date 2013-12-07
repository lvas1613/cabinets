
<div id="categories">

    <div class="boxes_categories">
<?php

foreach($images as $image):

    echo '<div class="boxes_categories"><a href="http://cabinets.local/assets/imgs/'.$image->filename.'" rel="lightbox-'.$image->cat_name.'" title="'.$image->caption.'"><img src="http://cabinets.local/assets/imgs/thumbs/'.$image->thumbs.'" /></a></div>';



endforeach;
?>
    </div>

</div>

@if($title == 'contact')
yield('contact')
@endif