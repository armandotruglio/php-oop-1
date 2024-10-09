<?php

class Movie
{
    protected string $title;
    protected int $year;
    protected string $poster;
    protected string $genre;

    public function __construct($_title, $_year, $_poster, $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->poster = $_poster;
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

    public function getPoster()
    {
        return $this->poster;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}
