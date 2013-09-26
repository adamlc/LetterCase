<?php

use \Adamlc\LetterCase\LetterCase;

class LetterCaseTest extends \PHPUnit_Framework_TestCase
{
    public function testSnakeCase()
    {
        $this->assertEquals((new LetterCase("PascalCase"))->snake(), 'pascal_case');
        $this->assertEquals((new LetterCase("Path/To/File"))->snake(), 'path_to_file');
        $this->assertEquals((new LetterCase("camelCase"))->snake(), 'camel_case');
        $this->assertEquals((new LetterCase("snake_case"))->snake(), 'snake_case');
        $this->assertEquals((new LetterCase("UPPERCase"))->snake(), 'upper_case');
        $this->assertEquals((new LetterCase("lasT"))->snake(), 'las_t');
    }

    public function testPascalCase()
    {
        $this->assertEquals((new LetterCase("PascalCase"))->pascal(), 'PascalCase');
        $this->assertEquals((new LetterCase("Path/To/File"))->pascal(), 'PathToFile');
        $this->assertEquals((new LetterCase("camelCase"))->pascal(), 'CamelCase');
        $this->assertEquals((new LetterCase("snake_case"))->pascal(), 'SnakeCase');
        $this->assertEquals((new LetterCase("UPPERCase"))->pascal(), 'UPPERCase');
        $this->assertEquals((new LetterCase("lasT"))->pascal(), 'LasT');
    }

    public function testCamelCase()
    {
        $this->assertEquals((new LetterCase("PascalCase"))->camel(), 'pascalCase');
        $this->assertEquals((new LetterCase("Path/To/File"))->camel(), 'pathToFile');
        $this->assertEquals((new LetterCase("camelCase"))->camel(), 'camelCase');
        $this->assertEquals((new LetterCase("snake_case"))->camel(), 'snakeCase');
        $this->assertEquals((new LetterCase("UPPERCase"))->camel(), 'upperCase');
        $this->assertEquals((new LetterCase("lasT"))->camel(), 'lasT');
    }

    public function testPathForm()
    {
        $this->assertEquals((new LetterCase("PascalCase"))->path(), 'Pascal/Case');
        $this->assertEquals((new LetterCase("Path/To/File"))->path(), 'Path/To/File');
        $this->assertEquals((new LetterCase("camelCase"))->path(), 'camel/Case');
        $this->assertEquals((new LetterCase("snake_case"))->path(), 'snake/case');
        $this->assertEquals((new LetterCase("UPPERCase"))->path(), 'UPPER/Case');
        $this->assertEquals((new LetterCase("lasT"))->path(), 'las/T');
    }
}
