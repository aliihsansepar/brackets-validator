<?php

    namespace App\Services;

    use App\Interfaces\BracketInterface;

    class BracketService implements BracketInterface
    {
        public $open_brackets = ['[', '{', '('];
        public $close_brackets = [']', '}', ')'];
        public $brackets_entered = [];
        public $message = null;
        public $status = false;

        /**
         * @param array $request
         * @return string
         */
        public function checkBrackets(array $request): string
        {
            $input = str_split($request['input']);
            foreach ($input as $item) {
                if (!in_array($item, $this->open_brackets) && !in_array($item, $this->close_brackets)) {
                    return 'Incorrect Parameter';
                }
                if (in_array($item, $this->open_brackets)) {
                    array_push($this->brackets_entered, $item);
                }else if (in_array($item, $this->close_brackets)) {
                    $index = array_search($item,array_values($this->close_brackets));
                    if (
                        count($this->brackets_entered) > 0 &&
                        $this->open_brackets[$index] == $this->brackets_entered[count($this->brackets_entered) -1]
                    ){
                        array_pop($this->brackets_entered);
                    }else {
                        $this->message =  'Unsuccessful';
                    }
                }
            }
            if (count($this->brackets_entered) > 10) {
                return 'Too Many Unclosed Brackets';
            }
            if(count($this->brackets_entered) == 0) {
                return  'Success';
            }
            return 'Unsuccessful';
        }
    }