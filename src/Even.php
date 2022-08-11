<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function playGame()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 1; $i <= 3; $i++) {
        $number = rand(1, 99);
        line("Question: %s", $number);
        $answer = prompt('Your answer');

        if (($number % 2 == 0 && $answer == 'yes') || ($number % 2 != 0 && $answer == 'no')) {
            line('Correct!');
        } else {
            if ($number % 2 == 0) {
                $correctAnswer = 'yes';
            } else {
                $correctAnswer = 'no';
            }
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $name!");
            return;
        }
    }
    line("Congratulations, $name!");
}
