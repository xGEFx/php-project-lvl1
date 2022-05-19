<?php

namespace BrainGames\Games;

use BrainGames\Engine;
use BrainGames\Games\GamesInterface;
use Exception;

use function cli\line;
use function cli\prompt;

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

    public function isCorrect($question, $answer): bool
    {
        return $answer === $this->correctAnswer($question);
    }

    public function correctAnswer($question): string
    {
        return $question % 2 == 0 ? 'yes' : 'no';
    }
}