<?php

namespace Hexlet\Code\Games;

use function Hexlet\Code\game;
use function Hexlet\Code\isCorrect;

function startGame($userName)
{
    game($userName);
}

function getQuestion(): string
{
    $operand_1 = random_int(1, 50);
    $operand_2 = random_int(1, 50);
    return "{$operand_1} {$operand_2}";
}

function getWelcomeMessage(): string
{
    return "Find the greatest common divisor of given numbers.";
}

function correctAnswer($question): string
{
    [$x, $y] = explode(" ", $question);

    while ($x != $y) {
        if ($x > $y) {
            $x -= $y;
        } else {
            $y -= $x;
        }
    }
    return $x;
}
