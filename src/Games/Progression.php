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
    global $correctAnswer;
    $step = random_int(1, 20);
    $progression = [];
    for ($i = 0; $i < 10; $i++) {
        $progression[] = ($i + 1) * $step;
    }
    $deletedItem = random_int(0, 9);
    $correctAnswer = $progression[$deletedItem];
    $progression[$deletedItem] = '..';
    return implode(' ', $progression);
}

function getWelcomeMessage(): string
{
    return "What number is missing in the progression?";
}

function correctAnswer(string $question): string
{
    global $correctAnswer;
    return $correctAnswer;
}
