<?php

namespace Patterns\StructuralPatterns\Flyweight;

class Forest {
    /**@var $trees Tree[]*/
    private array $trees;

    public function plantTree(int $x, int $y, string $name, string $color, string $texture)
    {
        $type = TreeFactory::getTreeType($name, $color, $texture);
        $tree = new Tree($x, $y, $type);
        $this->trees[] = $tree;
    }

    public function draw(): string
    {
        $out = '';
        foreach ($this->trees as $tree)
        {
            $out .= $tree->draw();
        }
        return $out;
    }
}