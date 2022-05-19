<?php

namespace BrainGames;

use BrainGames\Models\User;

use function cli\line;
use function cli\prompt;

trait Engine
{
    private $user;

    /**
     * @throws Exception
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function game()
    {
        line($this->getWelcomeMessage());
        for ($i = 0; $i < $this::MOVES; $i++) {
            $question = $this->getQuestion();
            line("Question: {$question}");
            $answer = prompt('Your answer: ');
            if (!$this->isCorrect($question, $answer)) {
                line("'{$answer}' is wrong answer ;(. Correct answer was '{$this->correctAnswer($question)}'.");
                line("Let's try again, %s!", $this->user->getName());
                exit;
            }
            line("Correct!");
        }
        line("Congratulations, %s!", $this->user->getName());
    }
}
