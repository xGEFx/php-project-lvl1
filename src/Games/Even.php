<?php

namespace BrainGames\Games;

use BrainGames\Engine;
use BrainGames\Games\GamesInterface;
use Exception;

class Even implements GamesInterface
{
    use Engine;

    public const MOVES = 3;

    /**
     * @throws Exception
     */
    public function getQuestion(): string
    {
        return random_int(1, 50);
    }

    public function getWelcomeMessage(): string
    {
        return 'Answer "yes" if the number is even, otherwise answer "no".';
    }

    public function correctAnswer($question): string
    {
        return $question % 2 == 0 ? 'yes' : 'no';
    }
}
