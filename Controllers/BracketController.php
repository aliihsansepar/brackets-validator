<?php

namespace Controllers;

use Services\BracketService;

class BracketController 
{
    public $bracketService;

    public function __construct(BracketService $bracketService)
    {
        $this->bracketService = $bracketService;
    }

    public function validateBrackets() 
    {
        var_dump($this->bracketService->checkBracket($_REQUEST));
    }
}