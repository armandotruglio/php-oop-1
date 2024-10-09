<?php

class Movie
{
    protected string $title;
    protected int $year;
    protected string $genre;

    public function __construct($_title, $_year, $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}
