# AngleOperations
PHP class that does arithmetic operations with degrees, primes and seconds.

- [0. Installation](#installation)
- [1. How to use](#how-to-use)
  - [Methods](#methods)
- [2. Documentation](#documentation)
- [3. Credits](#credits)

## Installation

You can easily install that module using Composer:
```bash
composer require hearot/angleoperations
```

Or, if you want to upgrade the module:
```bash
composer update
```

## How to use

AngleOperations is a static class, then you can call it in this way, for example:
```php
$addition = \hearot\AngleOperations\AngleOperations::addition('86 degrees 40 primes 30 seconds', '70 degrees 51 primes 17 seconds');
```

### Methods

 * `addition()`,
 * `substration()`,
 * `multiplication()`,
 * `division()`

## Credits

Developer/Creator - [Github](https://github.com/hearot) [Website](https://hearot.it)
