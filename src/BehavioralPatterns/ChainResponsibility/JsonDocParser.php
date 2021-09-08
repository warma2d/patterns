<?php

namespace Patterns\BehavioralPatterns\ChainResponsibility;

class JsonDocParser extends DocParser
{
    public function parse($fileName): string
    {
        if ($this->canHandleFile($fileName, 'json')) {
            return "A JSON parser is handling the file: {$fileName}\r\n";
        } else {
            return parent::parse($fileName);
        }
    }
}