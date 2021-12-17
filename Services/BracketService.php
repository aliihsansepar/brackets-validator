<?php 

namespace Services;

use Interfaces\BracketInterface;

class BracketService implements BracketsInterface
{

    public $brackets = ['[', ']', '{', '}', '(', ')'];
    public $brackets_entered = [];

    /**
     * 
     * @param string $input
     * @returm void|array 
     */

    public function checkInput(string $input)
    {
        
    }

}