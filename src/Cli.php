<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

class Cli
{
    public static function hello()
    {
        line('Welcome to the Brain Games!');
    }

    public static function askName()
    {
        $name = prompt('May I have your name?');
        line("Hello, %s!", $name);
    }
}
