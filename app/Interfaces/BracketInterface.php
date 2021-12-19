<?php

    namespace App\Interfaces;

    interface BracketInterface
    {
        /**
         * @param array $input
         * @return string
         */
        public function checkBrackets(array $input): string;
    }