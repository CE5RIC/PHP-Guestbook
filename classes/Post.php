<?php
declare(strict_types=1);


class Post {

    private string $title;
    private string $content;
    private string $authorName;
    private string $date;


public function __construct(string $title, string $content, string $authorName, string $date) {
    $this->title = $title;
    $this->content = $content;
    $this->authorName = $authorName;
    $this->date = $date;
}

}