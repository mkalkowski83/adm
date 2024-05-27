<?php
declare(strict_types=1);

namespace Adm;

final class InsertionSort
{
    public function sort(array &$arrayToSort): void
    {
        $elementsInArray = count($arrayToSort);
        for ($i = 1, $n = $elementsInArray; $i < $n; $i++) {
            for ($j = $i; $j > 0 && $arrayToSort[$j] < $arrayToSort[$j - 1]; $j--) {
                [$arrayToSort[$j], $arrayToSort[$j - 1]] = [$arrayToSort[$j - 1], $arrayToSort[$j]];
            }
        }
    }
}
