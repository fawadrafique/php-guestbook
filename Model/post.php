<?php
declare(strict_types=1);

class Post {
    private array $message;

    public function getMessage(): array
    {
        return $this->message;
    }

    public function setMessage(array $message): void
    {
        $this->message = $message;
    }

    public function setPost(): void
    {
        if(!file_exists('book.json'))
        {
            $json = json_encode(array($this->message),JSON_PRETTY_PRINT);
            file_put_contents('book.json', $json);
        }
        else
        {
            $getFile = file_get_contents('book.json');
            $tempArray = json_decode($getFile,true);
            array_push($tempArray, $this->message);
            $json =json_encode($tempArray,JSON_PRETTY_PRINT);
            file_put_contents('book.json', $json);
        }
    }
    public  function getPost()
    {
        if(file_exists('book.json'))
        {
            $getFile = file_get_contents('book.json');
            return json_decode($getFile,true);
        }
    }


}