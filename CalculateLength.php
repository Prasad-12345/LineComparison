<?php
class LineComparison{
    //variables
    public $x1;
    public $y1;
    public $x2;
    public $y2;
    public $x3;
    public $y3;
    public $x4;
    public $y4;
    public $distance1;
    public $distance2;

    public function userInput(){
        //user input
        $this->x1 = readline("Enter x1 :");
        $this->x2 = readline("Enter x2 :");
        $this->y1 = readline("Enter y1 :");
        $this->y2 = readline("Enter y2 :");
        $this->x3 = readline("Enter x3 :");
        $this->x4 = readline("Enter x4 :");
        $this->y3 = readline("Enter y3 :");
        $this->y4 = readline("Enter y4 :");
    }

    //calculateLength function calculate length and returns the length
    public function calculateLength(){
        $this->distance1 = sqrt(pow(($this->x2 - $this->x1), 2) + pow(($this->y2 - $this->y1), 2)); 
       // return round($distance1, 2); 
       echo "Length of first line :" . round($this->distance1, 2) . "\n";
        
        $this->distance2 = sqrt(pow(($this->x4 - $this->x3), 2) + pow(($this->y4 - $this->y3), 2));
        //return round($distance2, 2);
        echo "Length of second line :" . round($this->distance2, 2) . "\n";
    }  

    //function to check the equality of two lines
    public function checkEquality(){
        if($this->distance1 == $this->distance2){
            echo "Two lines are equal";
        }
        else{
            echo "Two lines are not equal";
        }
    }
}   
    //Object
    $obj = new LineComparison();
    $obj->userInput();
    $obj->calculateLength();
    $obj->checkEquality();
?>
