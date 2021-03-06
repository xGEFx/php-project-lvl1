<?php

namespace Hexlet\Code\Games;

use function Hexlet\Code\game;
use function Hexlet\Code\isCorrect;

function startGame(string $userName)
{
    game($userName);
}

function getQuestion(): string
{
    return random_int(1, 50);
}

function getWelcomeMessage(): string
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function correctAnswer(string $question): string
{
    return $question % 2 == 0 ? 'yes' : 'no';
}
