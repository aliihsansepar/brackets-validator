<?php

namespace App\Controllers;

use App\Services\BracketService;

class BracketController
{
    /**
     * @param $request
     * @return string
     */
    public function validateBrackets(): string
    {
        $request = $_POST;
        $bracketService = new BracketService();
        return $bracketService->checkBrackets($request);
    }
}