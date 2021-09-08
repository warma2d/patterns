<?php

namespace Patterns\BehavioralPatterns\ChainResponsibility;

abstract class DocParser
{
    protected DocParser|null $successor;

    public function __construct(DocParser $successor = null)
    {
        $this->successor = $successor;
    }

    public function parse(string $fileName): string
    {
        if (!is_null($this->successor)) {
            return $this->successor->parse($fileName);
        } else {
            return "Unable to find the correct parser for the file: {$fileName}\r\n";
        }
    }

    public function canHandleFile(string $fileName, string $format): bool
    {
        if ($fileName) {
            $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            if ($extension === $format) {
                return true;
            }
        }

        return false;
    }
}