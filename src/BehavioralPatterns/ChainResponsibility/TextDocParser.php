<?php

namespace Patterns\BehavioralPatterns\ChainResponsibility;

class TextDocParser extends DocParser
{
    public function parse($fileName): string
    {
        if ($this->canHandleFile($fileName, 'txt')) {
            return "A TEXT parser is handling the file: {$fileName}\r\n";
        } else {
            return parent::parse($fileName);
        }
    }
}