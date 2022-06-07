<?php
//Line comparison problem
class Comparison{
   public $x2;
   public $x1;
   public $y2;
   public $y1;
    static function display(){
        echo"Welcome to Line Comparison Problem \n";
    }
     //Function to get values of x1,x2,y1,y2 from user
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
    /* Function to check the equality of two lengths
      Passing l1 and l2 as parameters and shows if equal or not
      */
    function checkEqual($l1, $l2)
    {
        if ($l1 == $l2) {
            echo "\nLengths are equal";
        } else {
            echo "\nLengths are not equal";
        }
    }
    /* Function to check the equality of two lengths
      Passing l1 and l2 as parameters and shows if equal,greater and smaller
      */
    function compare($l1, $l2)
    {
        if ($l1 == $l2) {
            echo "\nLengths are equal";
        } elseif($l1>$l2) {
            echo "\nfirst length is grater than second length";
        }else{
            echo"\nsecond length is grater than first length";
        }
    }
}
     

Comparison::display();//call static method
$lineComparison = new Comparison();
echo "Enter co-ordinates for first length"."\n";
echo $l1= $lineComparison->computeLength(); //print the value of length1
echo"\n";
echo "Enter co-ordinates for second length"."\n";
echo $l2= $lineComparison->computeLength();//print the value of length2
$lineComparison->checkEqual($l1,$l2);
$lineComparison->compare($l1,$l2);
?>