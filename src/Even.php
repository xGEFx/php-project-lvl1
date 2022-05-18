<?php

namespace BrainGames;

use BrainGames\Models\User;

use function cli\line;
use function cli\prompt;

class Even
{
    private $numbers;
    private $user;

    /**
     * @throws \Exception
     */
    public function __construct(User $user)
    {
        $this->numbers = [random_int(1, 50), random_int(1, 50), random_int(1, 50)];
        $this->user = $user;
    }

    public function game()
    {
        line('Answer "yes" if the number is even, otherwise answer "no".');
        foreach ($this->numbers as $number) {
            line("Question: {$number}");
            $answer = prompt('Your answer: ');
            if (!$this->isCorrect($number, $answer)) {
                line("'{$answer}' is wrong answer ;(. Correct answer was '{$this->correctAnswer($number)}'.");
                line("Let's try again, %s!", $this->user->getName());
                exit;
            }
            line("Correct!");
        }
        line("Congratulations, %s!", $this->user->getName());
    }

    private function isCorrect($number, $answer): bool
    {
        return $answer === $this->correctAnswer($number);
    }

    private function correctAnswer(int $number): string
    {
        return $number % 2 == 0 ? 'yes' : 'no';
    }
}
