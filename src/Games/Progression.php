<?php

namespace BrainGames\Games;

use BrainGames\Engine;
use BrainGames\Games\GamesInterface;
use Exception;

class Progression
{
    use Engine;

    private $correctAnswer = '';

    public const MOVES = 3;

    /**
     * @throws Exception
     */
    public function getQuestion(): string
    {
        $step = random_int(1, 20);
        $progression = [];
        for ($i = 0; $i < 10; $i++) {
            $progression[] = ($i + 1) * $step;
        }
        $deletedItem = random_int(0, 9);
        $this->correctAnswer = $progression[$deletedItem];
        $progression[$deletedItem] = '..';
        return implode(' ', $progression);
    }

    public function getWelcomeMessage(): string
    {
        return "What number is missing in the progression?";
    }

    public function correctAnswer($question): string
    {
        return $this->correctAnswer;
    }
}
