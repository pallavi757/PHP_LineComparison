<?php
class Comparison{
   public $x2;
   public $x1;
   public $y2;
   public $y1;
    static function display(){
        echo"Welcome to Line Comparison Problem \n";
    }
     /*Function to get values of x1,x2,y1,y2 from user*/
     function getValues(){
        $this->x2=readline("Enter value of x2:");
        $this->x1=readline("Enter value of x1:");
        $this->y2=readline("Enter value of y2:");
        $this->y1=readline("Enter value of y1:");

     }
    /* Function to Calculate length of the points
      using given formula
     */
    function computeLength(){
        $this->getValues();
        $length = sqrt($this->x2-$this->x1)^2 +($this->y2-$this->y1)^2;
        return $length;
    }
     
}
Comparison::display();
$lineComparison = new Comparison();
echo  $lineComparison->computeLength(); //print the value of length 
//$lineComparison->computeLength();  
?>