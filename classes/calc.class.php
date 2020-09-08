<?php 
    class Calc {
        public $operator;
        public $num1;
        public $num2;

    public function __constructor(string $operator, int $one, int $two, int $three) {
        $this->operator = $operator;
        $this->num1= $two;
        $this->num2 = $three;
    }

    public function calculator(int $operator) {
        switch ($operator) {
            case 'add';
            $result = $this->num1 + $this->num2;
            return $result;

            case 'sub';
            $result = $this->num1 - $this->num2;
            return $result;

            case 'div';
            $result = $this->num1 / $this->num2;
            return $result;

            case 'mul';
            $result = $this->num1 * $this->num2;
            return $result;

            break;
            default: 
                echo "error";
        break;
        }
    }
}
?>