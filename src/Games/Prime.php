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
    return random_int(1, 100);
}

function getWelcomeMessage(): string
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function correctAnswer($question): string
{
    $count = 0;
    for ($i = 1; $i <= $question; $i++) {
        if ($question % $i === 0) {
            $count++;
        }
    }
    return $count === 2 ? 'yes' : 'no';
}
