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
}
