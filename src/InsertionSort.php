<?php
declare(strict_types=1);

namespace Adm;

final class InsertionSort
{
    public function sort(array &$s): void
    {
        $count = count($s);
        for ($i = 1, $n = $count; $i < $n; $i++) {
            for ($j = $i; $j > 0 && $s[$j] < $s[$j - 1]; $j--) {
                [$s[$j], $s[$j - 1]] = [$s[$j - 1], $s[$j]];
            }
        }
    }
}
