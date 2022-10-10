<?php

    class Calculator {

        private $operator = null;
        private $firstNum = null;
        private $secondNum = null;
        private $answer = 0;

        public function calc($operator, $firstNum = null, $secondNum = null) {


            if (isset($operator) && isset($firstNum) && isset($secondNum)){
                
                switch ($operator) {
                    case "+" :
                        $answer = $firstNum + $secondNum;
                        return "The sum of the numbers is $answer <br>";
                        

                    case "-" :
                        $answer = $firstNum - $secondNum;
                        return "The difference of the numbers is $answer <br>";
                        
                        
                    case "*" :
                        $answer = $firstNum * $secondNum;
                        return "The product of the numbers is $answer <br>";
                        
                        
                    case "/" :
                        if ($secondNum != 0){
                            $answer = $firstNum / $secondNum;
                            return "The quotient of the numbers is $answer <br>";
                        }else {
                            return "Cannot divide by zero <br>";
                        }
                    default : 
                        return "You must enter an operator (+, -, *, /) and two numbers <br>";    

                }
            
            } else {
                return "You must enter an operator (+, -, *, /) and two numbers <br>";
            }
        }
    }
?>