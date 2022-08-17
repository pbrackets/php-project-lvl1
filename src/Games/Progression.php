<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';
const LENGTH_PROGRESSION = 10;

function getProgression($length, $begin, $step): array
{
    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $begin += $step;
        $result[] = $begin;
    }
    return $result;
}

function run()
{
    $generateRound = function () {
        $beginProgression = rand(1, 10);
        $stepProgression = rand(10, 10);
        $progression = getProgression(LENGTH_PROGRESSION, $beginProgression, $stepProgression);
        $missingElement = rand(0, count($progression) - 1);
        $solution = $progression[$missingElement];
        $progression[$missingElement] = '..';
        $question = implode(' ', $progression);
        return [$question, $solution];
    };
    runGame(DESCRIPTION, $generateRound);
}
