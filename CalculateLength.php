<?php
class LineComparison{
    //variables
    public $x1;
    public $y1;
    public $x2;
    public $y2;
    public $distance;

    //function to take coordinates of line from user
    public function userInput(){
        //user input
        $this->x1 = readline("Enter x1 :");
        $this->x2 = readline("Enter x2 :");
        $this->y1 = readline("Enter y1 :");
        $this->y2 = readline("Enter y2 :");
    }

    //calculateLength function calculate length and returns the length
    public function lengthOfLine(){
       $this->distance = sqrt(pow(($this->x2 - $this->x1), 2) + pow(($this->y2 - $this->y1), 2));
       return round($this->distance, 2);
    }   

    //function to compare two lines
    public function compareTwoLines($line1, $line2){
        if($line1 > $line2){
            echo "Line1 is greater than line2";
        }
        elseif($line1 < $line2){
            echo "Line2 is greater than line1";
        }
        else{
            echo "Line1 is equal to line2";
        }
    }
}   
    //Object
    $calculateLength = new LineComparison();
    $calculateLength->userInput();
    $line1 = $calculateLength->lengthOfLine();
    echo "Length of line1 is :" . $line1 . "\n";

    $calculateLength->userInput();
    $line2 = $calculateLength->lengthOfLine();
    echo "Length of line2 is :" . $line2 . "\n";

    $calculateLength->compareTwoLines($line1, $line2);
