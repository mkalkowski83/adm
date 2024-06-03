<?php
declare(strict_types=1);

namespace Adm\MovieSchedulingProblem;

final class MovieCollection
{
    private array $movies;

    public function __construct(Movie ... $movie)
    {
        $this->movies = $movie;
    }

    public function getMovies(): array
    {
        return $this->movies;
    }

    public function sortByEndDate(): void
    {
        // Sort movies by their end dates (completion dates)
        usort($this->movies, static function(Movie $a, Movie $b): int {
            return $a->endDate <=> $b->endDate;
        });
    }
}