<?php
namespace BrainGames\Cli;
use function cli\line;
use function cli\prompt;

function requestName(){
    $name = prompt('May I have your name?');
    
    return $name;
}

