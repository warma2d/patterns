<?php

namespace Patterns\StructuralPatterns\Flyweight;

class TreeFactory {
    /** @var $treeTypes TreeType[]$*/
    static array $treeTypes = [];

    static function getTreeType(string $name, string $color, string $texture): TreeType
    {
        $type = self::findTreeType($name, $color, $texture);

        if (is_null($type)) {
            $type = new TreeType($name, $color, $texture);
            self::$treeTypes[] = $type;
        }

        return $type;
    }

    static private function findTreeType(string $name, string $color, string $texture): TreeType|null
    {
        foreach (self::$treeTypes as $treeType) {
            if ($treeType->getName() === $name
                && $treeType->getColor() === $color
                && $treeType->getTexture() === $texture) {
                return $treeType;
            }
        }

        return null;
    }
}