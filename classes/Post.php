<?php
declare(strict_types=1);

class Post
{
    private string $title;
    private string $content;
    private string $authorName;
    private string $date;


    public function __construct(string $title, string $content, string $authorName ,string $date)
    {
        $this->title = $title;
        $this->content = $content;
        $this->authorName = $authorName;
        $this->date = $date;
    }

    public function getTitle (): string
    {
        return $this->title;
    }
    public function getContent () : string {
        return $this->content;
    }
    public function getAuthorName () : string {
        return $this->authorName;
    }
    public function getDate () : string {
        return $this->date;
    }

}

