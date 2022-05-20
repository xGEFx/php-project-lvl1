<?php

namespace Hexlet\Code\Games;

require __DIR__ . '/../Engine.php';

use function Hexlet\Code\game;
use function Hexlet\Code\isCorrect;

const OPERATORS = ['+', '-', '*'];

function startGame($userName)
{
    game($userName);
}

function getQuestion(): string
{
    $operand_1 = random_int(0, 10);
    $operand_2 = random_int(0, 10);
    $operator = OPERATORS[random_int(0, 2)];
    return "{$operand_1} {$operator} {$operand_2}";
}

function getWelcomeMessage(): string
{
    return "What is the result of the expression?";
}

function correctAnswer($question): string
{
    return math_eval($question);
}
