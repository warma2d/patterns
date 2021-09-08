<?php

namespace Patterns\StructuralPatterns\Flyweight;

class Tree {
    private int $x;
    private int $y;
    private TreeType $type;

    public function __construct(int $x, int $y, TreeType $type)
    {
        $this->x = $x;
        $this->y = $y;
        $this->type = $type;
    }

    public function draw(): string
    {
        return "I am a tree with coordinates x = $this->x and y = $this->y \r\n";
    }
}