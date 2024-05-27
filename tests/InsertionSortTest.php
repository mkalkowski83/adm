<?php
declare(strict_types=1);

namespace Adm\Test;

use Adm\InsertionSort;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class InsertionSortTest extends TestCase
{
    #[Test]
    public function should_sort_letters(): void
    {
        $s = ['I','N','S','E','R','T','I','O','N','S','O','R','T'];
        $insertionSort = new InsertionSort();
        $insertionSort->sort($s);
        $this->assertEquals([
            'E',
            'I',
            'I',
            'N',
            'N',
            'O',
            'O',
            'R',
            'R',
            'S',
            'S',
            'T',
            'T',
        ], $s);
    }

    #[Test]
    public function should_sort_numbers(): void
    {
        $s = [5,9,1,4,3,1,0,2,3,5,7,8,1];
        $insertionSort = new InsertionSort();
        $insertionSort->sort($s);
        $this->assertEquals([
            0,
            1,
            1,
            1,
            2,
            3,
            3,
            4,
            5,
            5,
            7,
            8,
            9,
        ], $s);
    }
}
