<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function hello()
{
    line('Welcome to the Brain Games!');
}

function askName()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
