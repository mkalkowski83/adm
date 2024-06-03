<?php
declare(strict_types=1);

namespace Adm\MovieSchedulingProblem;

final readonly class MovieScheduling
{
    public function __construct(private MovieCollection $movieCollection)
    {
    }

    public function schedule(): MovieCollection
    {
        $acceptedMovies = [];

        $this->movieCollection->sortByEndDate();
        $movies = $this->movieCollection->getMovies();

        while (!empty($movies)) {
            // Accept the movie with the earliest completion date
            $movie = array_shift($movies);
            $acceptedMovies[] = $movie;

            // Remove any movies that intersect with the accepted movie
            foreach ($movies as $key => $m) {
                if ($m->startDate < $movie->endDate) {
                    unset($movies[$key]);
                }
            }

            // Re-index the array
            $movies = array_values($movies);
        }

        return new MovieCollection(... $acceptedMovies);
    }
}