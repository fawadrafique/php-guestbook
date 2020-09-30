<?php
declare(strict_types=1);

require '../model/post.php';
require '../controller/controller.php';

?>

<!DOCTYPE html>
<html>

<?php include('header.php'); ?>
<?php if(file_exists('book.json')): ?>
    <?php foreach(array_reverse($post->getPost()) as $post): ?>
        <div class="card border  mt-3">
            <div class="card-header bg-info text-light">
                <h3 class="h3 mb-0">
                    <?= $post['name'] ?>
                </h3><?= $post['time'] ?>
            </div>
            <div class="card-body">
                <?= $post['message'] ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<?php include('footer.php'); ?>

</html>