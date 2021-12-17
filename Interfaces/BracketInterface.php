<?php 

namespace Interfaces;

interface BracketInterface

{   

    /**
    * @param array  $input
    * @return void|array
    */
    public function checkBrackets(array $input);

}