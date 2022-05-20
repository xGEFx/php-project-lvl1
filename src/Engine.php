<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Games\getWelcomeMessage;
use function Hexlet\Code\Games\getQuestion;
use function Hexlet\Code\Games\correctAnswer;

const MOVES = 3;

function game(string $userName)
{
    line(getWelcomeMessage());
    for ($i = 0; $i < MOVES; $i++) {
        $question = getQuestion();
        line("Question: {$question}");
        $answer = prompt('Your answer: ');
        if (!isCorrect($question, $answer)) {
            $correctAnswer = correctAnswer($question);
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, %s!", $userName);
            exit;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $userName);
}

function isCorrect(string $question, string $answer): bool
{
    return correctAnswer($question) === $answer;
}
