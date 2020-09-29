<?php
declare(strict_types=1);
$post = new Post();
$name = $message = $time  = '';
$error = ['name' => '', 'time' => '', 'message' => ''];
if(isset($_POST['submit'])){

    if (empty($_POST['name'])) {
        $error['name'] = "Please enter your name";
    } else {
        $name = sanitizer($_POST['name']);
        if (preg_match('/^[a-zA-Z]+(([\',. -][a-zA-Z ])?[a-zA-Z]*)*$/i', $name)) {
            // TODO: email is valid
        } else {
            $error['name'] = "Please enter correct name";
        }
    }
    if (empty($_POST['comment'])) {
        $error['message'] = "Write something!";
    } else {
        $message = sanitizer($_POST['comment']);
        if (preg_match('/^.{8,}$/i', $message)) {
            // TODO: email is valid
        } else {
            $error['message'] = "You're missing something!";
        }
    }
    if (empty($error['name']) && empty($error['message'])) {

        $comment = array("name" => $name, "time" => date("d-m-Y H:i:s", time()), "message" => $message);
        $post->setMessage($comment);
        $post->setPost();
    }
}
function sanitizer($sanitize)
{
    $clean_comment = strip_tags($sanitize);
    return htmlspecialchars($clean_comment);
}