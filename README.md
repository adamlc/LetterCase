LetterCase
==========

A tool to convert from and to camelCase, snake_case, PascalCase and Path/Form.

This fork has moderinized the Class structure a bit, added composer support and added PSR-2 compliance

## USAGE

```php
<?php
$snake_case = (new LetterCase("PascalCase"))->snake();   // => 'camel_case'
$camelCase  = (new LetterCase("PascalCase"))->camel();  // => 'snakeCase'
$PascalCase = (new LetterCase("PascalCase"))->pascal(); // => 'SnakeCase'
$path_form  = (new LetterCase("PascalCase"))->path();   // => 'Pascal/Case'
```
