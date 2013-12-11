<?php
/**
 * Created by PhpStorm.
 * User: csoliz
 * Date: 12/9/13
 * Time: 5:36 PM
 */


$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
?>

<?php if ($paginator->getLastPage() > 1): ?>
    <div class="pages">
    <ul class="pagination">
        <?php echo $presenter->render(); ?>
    </ul>
    </div>
<?php endif; ?>