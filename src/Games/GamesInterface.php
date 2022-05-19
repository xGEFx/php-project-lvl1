<?php

namespace BrainGames\Games;

interface GamesInterface
{
    public function getQuestion(): string;
    public function getWelcomeMessage(): string;
    public function isCorrect($question, $answer): bool;
    public function correctAnswer($question): string;
}
