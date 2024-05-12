<?php
class Human{
    public $name;
    public $age;
function __construct($personName,$age=0)
{
    echo" New Human Object is Create <br>";
    $this->name=$personName;
    $this->age=$age;
}

    function sayHI(){
        echo "Salam ".'<br>';
           $this->sayName();
    }
    function sayName(){
       if($this->age){
        echo "My Name Is {$this->name}, I am {$this->age} years old";
       }else{
        echo "My Name Is {$this->name},I don't know how old I am <br>";
       }
    }
}

$h1 = new Human("Hasin",21);
$h2 = new Human("Hasin");
// $h1->name="anik";
$h1->sayHI();
$h2->sayHI();
?>

<?php
//__FundTotal__//
class Fund{
    private $fund;
    function __construct($initialFund = 0){
            $this->fund=$initialFund;
    }
    public function addFund($money){
        $this->fund += $money;
    }
    public function deductFund($money){
        $this->fund -= $money;
    } 
    public function getTotal(){
        echo "Total fund is {$this->fund}<br>";
    }
}
$ourFund = new Fund(100);
// $ourFund->fund=67;
$ourFund->addFund(10);
$ourFund->deductFund(7);
$ourFund->getTotal();
?>
<?php
class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode = ''){
        $this->color=ltrim($colorCode,'#');
        $this->parseColor();
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($colorCode){
          $this->color=ltrim($colorCode,"#");
          $this->parseColor();
    }
    public function RGBcolor(){
        echo "Red = {$this->red}\n Green = {$this->green}\n Blue = {$this->blue}\n";
    }
    private function parseColor()
    {
        if($this->color){
            list($this->red,$this->green,$this->blue)=sscanf($this->color,"%02x%02x%02x");
        }else{
            list($this->red,$this->green,$this->blue)=array(0,0,0);
        }
    }
}
$std = new RGB('#ff0020');
$std->RGBcolor();

?>