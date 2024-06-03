<?php
declare(strict_types=1);

namespace Adm\MovieSchedulingProblem;

final readonly class Movie
{
    public function __construct(
        public string             $title,
        public \DateTimeImmutable $startDate,
        public \DateTimeImmutable $endDate,
    ) {
    }
}