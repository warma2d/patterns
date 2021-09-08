<?php

namespace Patterns\StructuralPatterns\Composite;

class Item implements Component {

    private int $weight;

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function __construct(int $weight)
    {
        $this->weight = $weight;
    }
}
