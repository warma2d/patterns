<?php

namespace Patterns\StructuralPatterns\Flyweight;

class TreeType {
    private string $name;
    private string $color;
    private string $texture;

    public function __construct(string $name, string $color, string $texture)
    {
        $this->name = $name;
        $this->color = $color;
        $this->texture = $texture;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getTexture(): string
    {
        return $this->texture;
    }
}