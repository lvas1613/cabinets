
<ul>
<?php
foreach($image as $image):
echo '<li>'.$image->filename .'</li>';

echo '<li><a href="images/image-1.jpg" rel="lightbox" title="'.$image->caption.'"><img src="http://cabinets.local/assets/imgs/thumbs/'.$image->thumbs.'" /></a></li>';



endforeach;
?>
</ul>
