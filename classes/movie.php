<?php

class Genre
{
    protected array $names = [];

    public function __construct(...$_names)
    {
        foreach ($_names as $_name)
            $this->names[] = $_name;
    }

    public function getNames(): array
    {
        return $this->names;
    }
}

class Movie
{
    protected string $title;
    protected int $year;
    protected string $poster;
    protected Genre $genre;

    public function __construct(string $_title, int $_year, string $_poster, Genre $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->poster = $_poster;
        $this->genre = $_genre;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getPoster(): string
    {
        return $this->poster;
    }

    public function getGenre(): array
    {
        return $this->genre?->getNames();
    }
}
