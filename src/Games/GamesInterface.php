<?php

namespace BrainGames\Games;

interface GamesInterface
{
    public function getQuestion(): string;
    public function getWelcomeMessage(): string;
    public function correctAnswer($question): string;
}
