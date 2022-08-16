<?php
namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame($description, $generateRound)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);

    for ($i = 1; $i <= ROUNDS_COUNT ; $i++) {
        [$question, $solution] = $generateRound();
        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ($answer == $solution)  {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$solution'.");
            line("Let's try again, $name!");
            return;
        }
    }
    line("Congratulations, %s!", $name);
}