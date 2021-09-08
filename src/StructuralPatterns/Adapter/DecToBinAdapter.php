<?php

namespace Patterns\StructuralPatterns\Adapter;

class DecToBinAdapter {
    private RemoteBinaryCalculator $calculator;

    public function __construct(RemoteBinaryCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function sumDecNumbers($decNumberOne, $decNumberTwo): int
    {
        $binaryNumberOne = decbin($decNumberOne);
        $binaryNumberTwo = decbin($decNumberTwo);
        $binSum = $this->calculator->sumBinaryNumbers($binaryNumberOne, $binaryNumberTwo);

        return bindec($binSum);
    }
}
