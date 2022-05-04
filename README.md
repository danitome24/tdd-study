# tb

A dockerized dojo template environment to play with PHP testing and TDD.

This is a base project that can serve as starting point or _dojo_ to practice with php testing and symfony 4.

## List of code exercises

* [FizzBuzz](tests/Katas/FizzBuzz)
* [To-do list](tests/Katas/TodoList)
* [Greetings](tests/Katas/Greetings)
* [Leap Year](tests/Katas/LeapYear)
* [PrimeFactors](tests/Katas/PrimeFactors)
* [Elephant Carpaccio](tests/Katas/ElephantCarpaccio)

## Goodies

`App\Lib\FileStorageEngine` provides a simple persistence engine for some applications. It is not a real database, but
it provides persistence between requests for practicing.

## Setup details and tooling

Docker environment includes a php 7.4 installation with Postgres and XDebug configured.

[Details](phpdocker/README.md)

Preparing all the things:

```
make build
```

This will prepare the docker environment and install project dependencies.

There is a Makefile with several tools you can use. Do make help to know all of them.

```
make help
```

Configure your IDE:

PHPStorm set up CLI interpreter

Cli Interpreter: (Remote interpreter)

![Cli interpreter config](doc/php-settings.png)

Test Frameworks: (Remote interpreter)

![PHP Unit remote config](doc/phpunit-settings.png)
