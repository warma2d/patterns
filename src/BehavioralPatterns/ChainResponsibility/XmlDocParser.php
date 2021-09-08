<?php

namespace Patterns\BehavioralPatterns\ChainResponsibility;

class XmlDocParser extends DocParser
{
    public function parse($fileName): string
    {
        if ($this->canHandleFile($fileName, 'xml')) {
            return "A XML parser is handling the file: {$fileName}\r\n";
        } else {
            return parent::parse($fileName);
        }
    }
}