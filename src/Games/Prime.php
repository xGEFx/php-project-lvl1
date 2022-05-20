<?php

namespace BrainGames\Games;

use BrainGames\Engine;
use BrainGames\Games\GamesInterface;
use Exception;

class Prime implements GamesInterface
{
    use Engine;

    public const MOVES = 3;

    /**
     * @throws Exception
     */
    public function getQuestion(): string
    {
        return random_int(1, 100);
    }

    public function getWelcomeMessage(): string
    {
        return 'Answer "yes" if given number is prime. Otherwise answer "no".';
    }

    public function correctAnswer($question): string
    {
        $count = 0;
        for ($i = 1; $i <= $question; $i++) {
            if ($question % $i === 0) {
                $count++;
            }
        }
        return $count === 2 ? 'yes' : 'no';
    }
}
