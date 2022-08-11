<?php

namespace BrainGames\Cli;

use function cli\prompt;

function requestName()
{
    return prompt('May I have your name?');
}
