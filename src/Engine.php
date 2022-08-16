<?php
namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame($generateRound)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("What is the result of the expression?");

    for ($i = 1; $i <= 3 ; $i++) {
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