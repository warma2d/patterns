<?php

namespace Patterns\BehavioralPatterns\ChainResponsibility;

class DocParserProcessor
{
    public static function run($files): string
    {
        $xmlParser  = new XmlDocParser();
        $jsonParser = new JsonDocParser($xmlParser);
        $csvParser  = new CsvDocParser($jsonParser);
        $textParser = new TextDocParser($csvParser);

        $out = '';

        if (is_array($files)) {
            foreach ($files as $file) {
                $out .= $textParser->parse($file);
            }
        } else {
            $out = $textParser->parse($files);
        }

        return $out;
    }
}