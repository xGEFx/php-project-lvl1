<?php

namespace BrainGames\Games;

use BrainGames\Games\GamesInterface;
use Exception;
use BrainGames\Engine;

class Gcd implements GamesInterface
{
    use Engine;

    public const MOVES = 3;

    /**
     * @throws Exception
     */
    public function getQuestion(): string
    {
        $operand_1 = random_int(0, 50);
        $operand_2 = random_int(0, 50);
        return "{$operand_1} {$operand_2}";
    }

    public function getWelcomeMessage(): string
    {
        return "Find the greatest common divisor of given numbers.";
    }

    public function correctAnswer($question): string
    {
        $operands = explode(" ", $question);
        while (true) {
            if ($operands[0] === $operands[1]) {
                return $operands[1];
            }
            if ($operands[0] > $operands[1]) {
                $operands[0] -= $operands[1];
            } else {
                $operands[1] -= $operands[0];
            }
        }
    }
}
