<?php
class LineCoparison{
    //variables
    public $x1;
    public $y1;
    public $x2;
    public $y2;

    public function userInput(){
        //user input
        $this->x1 = readline("Enter x1 :");
        $this->x2 = readline("Enter x2 :");
        $this->y1 = readline("Enter y1 :");
        $this->y2 = readline("Enter y2 :");
    }

    //calculateLength function calculate length and returns the length
    public function calculateLength(){
        $distance = sqrt(pow(($this->x2 - $this->x1), 2) + pow(($this->y2 - $this->y1), 2)); 
        return round($distance, 2);      
    }  
}   
    //Object
    $obj = new LineCoparison();
    $obj->userInput();
    echo $obj->calculateLength();
?>