<?php
declare(strict_types=1);

include '../Model/post.php';
include '../Controller/controller.php';

session_start();
whatIsHappening();
function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SERVER["REQUEST_URI"]);

}
//print_r($post->getPost());
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