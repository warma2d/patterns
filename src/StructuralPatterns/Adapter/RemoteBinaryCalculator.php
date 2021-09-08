<?php

namespace Patterns\StructuralPatterns\Adapter;

class RemoteBinaryCalculator {

    public function sumBinaryNumbers(string $binaryNumberOne, string $binaryNumberTwo): string
    {
        $decNumberOne = bindec($binaryNumberOne);
        $decNumberTwo = bindec($binaryNumberTwo);
        $decSum = $decNumberOne + $decNumberTwo;

        return decbin($decSum);
    }
}
