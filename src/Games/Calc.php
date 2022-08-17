<?php
namespace BrainGames\Games\Calc;
use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What is the result of the expression?';

function run()
{
    $generateRound = function () {
        $arraySigns = ['-', '+', '*'];

        $randNumber1 = rand(1, 5);
        $randNumber2 = rand(1, 5);
        $randSign = $arraySigns[array_rand($arraySigns)];


        switch ($randSign) {
            case '+':
                $solution = $randNumber1 + $randNumber2;
                break;
            case '-':
                $solution = $randNumber1 - $randNumber2;
                break;
            case '*':
                $solution = $randNumber1 * $randNumber2;
                break;
            default:
                $solution = null;
        }
        $question = $randNumber1 .' '. $randSign .' '. $randNumber2;
        return [$question, $solution];
    };
    runGame(DESCRIPTION, $generateRound);
}

