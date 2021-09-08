<?php

namespace Patterns\StructuralPatterns\Composite;

class Box implements Component {

    /* @var $children Component[] */
    private array $children = [];

    public function addComponent(Component $component): void
    {
        $this->children[] = $component;
    }

    public function getWeight(): int
    {
        $weight = 0;
        foreach ($this->children as $component) {
            $weight += $component->getWeight();
        }

        return $weight;
    }
}
