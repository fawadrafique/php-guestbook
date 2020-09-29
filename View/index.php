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
<!doctype html>
<html lang="en">

<?php include 'header.php'; ?>

    <form action="book.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name (required)">
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea name="comment" class="form-control z-depth-1" rows="3" placeholder="Write something here..."></textarea>
        </div>
        <button action="submit" name="submit" value="1" class="btn btn-primary">Submit</button>
    </form>

<?php include 'footer.php'; ?>

</html>

