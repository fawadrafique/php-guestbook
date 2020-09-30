<?php
declare(strict_types=1);

class Post {
    private array $message;
    const MESSAGE_BOOK = 'book.json';

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
        if(!file_exists(self::MESSAGE_BOOK))
        {
            $json = json_encode(array($this->message),JSON_PRETTY_PRINT);
            file_put_contents(self::MESSAGE_BOOK, $json);
        }
        else
        {
            $getFile = file_get_contents(self::MESSAGE_BOOK);
            $tempArray = json_decode($getFile,true);
            $tempArray[] = $this->message;
            $json =json_encode($tempArray,JSON_PRETTY_PRINT);
            file_put_contents(self::MESSAGE_BOOK, $json);
        }
    }
    public  function getPost(): array
    {
        if(file_exists(self::MESSAGE_BOOK))
        {
            $getFile = file_get_contents(self::MESSAGE_BOOK);
            return json_decode($getFile,true);
        }
    }


}