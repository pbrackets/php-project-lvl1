<?php
namespace BrainGames\Games\Gcd;
use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function NOD($a, $b)
{
    while ($a != $b)
    {
        if ($a > $b) $a =  $a - $b;
        else $b = $b - $a;
    }
    return $b;
}

function run()
{
    $generateRound = function () {

        $randNumber1 = rand(1, 31);
        $randNumber2 = rand(1, 31);

        $solution = NOD($randNumber1, $randNumber2);
        $question = $randNumber1 . ' ' . $randNumber2;
        return [$question, $solution];
    };
    runGame(DESCRIPTION, $generateRound);
}