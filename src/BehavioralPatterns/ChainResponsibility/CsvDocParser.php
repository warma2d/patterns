<?php

namespace Patterns\BehavioralPatterns\ChainResponsibility;

class CsvDocParser extends DocParser
{
    public function parse($fileName): string
    {
        if ($this->canHandleFile($fileName, 'csv')) {
            return "A CSV parser is handling the file: {$fileName}\r\n";
        } else {
            return parent::parse($fileName);
        }
    }
}