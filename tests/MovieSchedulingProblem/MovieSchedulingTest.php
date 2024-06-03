<?php
declare(strict_types=1);

namespace Adm\Test\MovieSchedulingProblem;

use Adm\MovieSchedulingProblem\Movie;
use Adm\MovieSchedulingProblem\MovieCollection;
use Adm\MovieSchedulingProblem\MovieScheduling;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class MovieSchedulingTest extends TestCase
{
    #[Test]
    public function should_the_right_movies_collection(): void
    {
        //“Discrete” Mathematics, Halting State, Programming Challenges, Calculated Bets
        $movieCollection = new MovieCollection(
            new Movie('Tarjan of the Jungle', new \DateTimeImmutable('2024-02-01'), new \DateTimeImmutable('2024-06-01')),
            new Movie('The Four Volume Problem', new \DateTimeImmutable('2024-06-01'), new \DateTimeImmutable('2024-11-30')),
            new Movie('The President’s Algorist', new \DateTimeImmutable('2024-01-01'), new \DateTimeImmutable('2024-04-30')),
            new Movie('Steiner’s Tree', new \DateTimeImmutable('2024-05-01'), new \DateTimeImmutable('2024-07-30')),
            new Movie('Process Terminated ', new \DateTimeImmutable('2024-09-01'), new \DateTimeImmutable('2024-11-30')),
            $haltingState = new Movie('Halting State', new \DateTimeImmutable('2024-04-01'), new \DateTimeImmutable('2024-05-30')),
            $programmingChallenges = new Movie('Programming Challenges', new \DateTimeImmutable('2024-08-01'), new \DateTimeImmutable('2024-10-30')),
            $discreteMathematics = new Movie('"Discrete" Mathematics', new \DateTimeImmutable('2024-02-01'), new \DateTimeImmutable('2024-03-30')),
            $calculatedBets = new Movie('Calculated Bets', new \DateTimeImmutable('2024-11-01'), new \DateTimeImmutable('2024-12-30')),
        );

        $movieScheduling = new MovieScheduling($movieCollection);
        $this->assertEquals(
            new MovieCollection(
                $discreteMathematics,
                $haltingState,
                $programmingChallenges,
                $calculatedBets,
            ),
            $movieScheduling->schedule()
        );
    }
}
