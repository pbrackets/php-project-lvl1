<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
function run()
{
    $generateRound = function () {
        $number = rand(1, 100);
        $question = $number;

        if ($number % 2 == 0) {
            $solution = 'yes';
        } else {
            $solution = 'no';
        }

        return [$question, $solution];
    };
    runGame(DESCRIPTION, $generateRound);
}
