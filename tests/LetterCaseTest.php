<?php

use \Adamlc\LetterCase\LetterCase;

class LetterCaseTest extends \PHPUnit_Framework_TestCase
{
    public function testSnakeCase()
    {
        $letterCase = new LetterCase();

        $this->assertEquals($letterCase->snake("PascalCase"), 'pascal_case');
        $this->assertEquals($letterCase->snake("Path/To/File"), 'path_to_file');
        $this->assertEquals($letterCase->snake("camelCase"), 'camel_case');
        $this->assertEquals($letterCase->snake("snake_case"), 'snake_case');
        $this->assertEquals($letterCase->snake("UPPERCase"), 'upper_case');
        $this->assertEquals($letterCase->snake("lasT"), 'las_t');
    }

    public function testPascalCase()
    {
        $letterCase = new LetterCase();

        $this->assertEquals($letterCase->pascal("PascalCase"), 'PascalCase');
        $this->assertEquals($letterCase->pascal("Path/To/File"), 'PathToFile');
        $this->assertEquals($letterCase->pascal("camelCase"), 'CamelCase');
        $this->assertEquals($letterCase->pascal("snake_case"), 'SnakeCase');
        $this->assertEquals($letterCase->pascal("UPPERCase"), 'UPPERCase');
        $this->assertEquals($letterCase->pascal("lasT"), 'LasT');
    }

    public function testCamelCase()
    {
        $letterCase = new LetterCase();

        $this->assertEquals($letterCase->camel("PascalCase"), 'pascalCase');
        $this->assertEquals($letterCase->camel("Path/To/File"), 'pathToFile');
        $this->assertEquals($letterCase->camel("camelCase"), 'camelCase');
        $this->assertEquals($letterCase->camel("snake_case"), 'snakeCase');
        $this->assertEquals($letterCase->camel("UPPERCase"), 'upperCase');
        $this->assertEquals($letterCase->camel("lasT"), 'lasT');
    }

    public function testPathForm()
    {
        $letterCase = new LetterCase();

        $this->assertEquals($letterCase->path("PascalCase"), 'Pascal/Case');
        $this->assertEquals($letterCase->path("Path/To/File"), 'Path/To/File');
        $this->assertEquals($letterCase->path("camelCase"), 'camel/Case');
        $this->assertEquals($letterCase->path("snake_case"), 'snake/case');
        $this->assertEquals($letterCase->path("UPPERCase"), 'UPPER/Case');
        $this->assertEquals($letterCase->path("lasT"), 'las/T');
    }
}
