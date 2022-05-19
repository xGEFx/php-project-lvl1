<?php

namespace BrainGames\Games;

use BrainGames\Games\GamesInterface;
use Exception;
use LangleyFoxall\MathEval;
use BrainGames\Engine;

class Calc implements GamesInterface
{
    use Engine;

    public const OPERATORS = ['+', '-', '*'];
    public const MOVES = 3;

    /**
     * @throws Exception
     */
    public function getQuestion(): string
    {
        $operand_1 = random_int(0, 10);
        $operand_2 = random_int(0, 10);
        return "{$operand_1} {$this::OPERATORS[random_int(0, 2)]} {$operand_2}";
    }

    public function getWelcomeMessage(): string
    {
        return "What is the result of the expression?";
    }

    public function isCorrect($question, $answer): bool
    {
        return $this->correctAnswer($question) === $answer;
    }

    public function correctAnswer($question): string
    {
        return math_eval($question);
    }
}
