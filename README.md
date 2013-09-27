LetterCase [![Build Status](https://travis-ci.org/adamlc/LetterCase.png?branch=master)](https://travis-ci.org/adamlc/LetterCase)
==========

A tool to convert from and to camelCase, snake_case, PascalCase and Path/Form.

This fork has moderinized the Class structure a bit, added composer support and added PSR-2 compliance

## USAGE

```php
<?php
$letterCase = new Adamlc\LetterCase\LetterCase();

$snake_case = $letterCase->snake("PascalCase"); // => pascal_case
$camelCase = $letterCase->camel("PascalCase"); // => pascalCase
$PascalCase = $letterCase->pascal("PascalCase"); // => PascalCase
$path_form = $letterCase->path("PascalCase"); // => Pascal/Case
```
