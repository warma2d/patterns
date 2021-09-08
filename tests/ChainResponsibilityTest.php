<?php declare(strict_types=1);

use Patterns\BehavioralPatterns\ChainResponsibility\DocParserProcessor;
use PHPUnit\Framework\TestCase;

final class ChainResponsibilityTest extends TestCase
{
    public function testXmlFile(): void
    {
        $fileName = 'someFile.xml';
        $result = DocParserProcessor::run($fileName);

        $this->assertEquals(
            "A XML parser is handling the file: {$fileName}\r\n",
            $result
        );
    }

    public function testJsonFile(): void
    {
        $fileName = 'someFile.json';
        $result = DocParserProcessor::run($fileName);

        $this->assertEquals(
            "A JSON parser is handling the file: {$fileName}\r\n",
            $result
        );
    }

    public function testNotSupportFile(): void
    {
        $fileName = 'someFile.doc';
        $result = DocParserProcessor::run($fileName);

        $this->assertEquals(
            "Unable to find the correct parser for the file: {$fileName}\r\n",
            $result
        );
    }

    public function testArrayFiles(): void
    {
        $files = [
            'file1.xml',
            'file2.json',
            'file3.txt',
            'file4.csv',
            'file5.doc'
        ];
        $result = DocParserProcessor::run($files);

        $this->assertEquals(
            "A XML parser is handling the file: file1.xml\r\n"
            ."A JSON parser is handling the file: file2.json\r\n"
            ."A TEXT parser is handling the file: file3.txt\r\n"
            ."A CSV parser is handling the file: file4.csv\r\n"
            ."Unable to find the correct parser for the file: file5.doc\r\n",
            $result
        );
    }
}
