<?php
declare(strict_types=1);

include 'model/post.php';
include 'controller/controller.php';
?>
<!doctype html>
<html lang="en">

<?php include 'header.php'; ?>

    <form action="<?= (empty($error['name']) && empty($error['message'])) ? 'book.php':'' ?>" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name (required)">
            <?php if ($error['name']) : ?>
                <div class="text-warning"><?= $error['name']; ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea name="comment" class="form-control z-depth-1" rows="3" id="comment"  placeholder="Write something here..."></textarea>
            <?php if ($error['message']) : ?>
                <div class="text-warning"><?= $error['message']; ?></div>
            <?php endif; ?>
        </div>
        <button action="submit" name="submit" value="1" class="btn btn-primary">Submit</button>
    </form>

<?php include 'footer.php'; ?>

</html>

