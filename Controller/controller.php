<?php
declare(strict_types=1);
$post = new Post();

if(isset($_POST['submit'])){
    $comment = array("name"=> $_POST['name'], "time"=> date("d-m-Y H:i:s", time()),"message"=> $_POST['comment']);
    $post->setMessage($comment);
    $post->setPost();
    var_dump($post);
}