<?php
namespace BrainGames\Even;
use function cli\line;
use function cli\prompt;

function run(){
    $name = prompt('May I have your name?');
    
    return $name;
}
