<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run()
{
    $generateRound = function () {
        $number = rand(1, 100);
        $question = $number;
        $flag = true;
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                $flag = false; // если хотя бы один раз поделилось
            }
        }
        if ($flag === false) {
            $solution = 'no';
        } else {
            $solution = 'yes';
        }

        return [$question, $solution];
    };
    runGame(DESCRIPTION, $generateRound);
}
