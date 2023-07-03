<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>PHP</title>
</head>
<body>
    <?php





    trait Collect {
        public function message(&$arr) {
            $arr[]=$this;
        }
    }
    interface Rules 
    {
        const type = 'sedan';
      public function test();
      public function debug();

    }
    
   class Car {
    // об'єкт 
    public $colorCar = '';
    public $typeCar = '';

    public function colorTest() {
        if($this->colorCar === 'red'){
            echo $this->colorCar . 'TER/II';
        } else {
            echo $this->colorCar . 'TER/III';
        }


         
    }
    
   }

   $vinCode = new Car(); // екземпляр 
   $vinCode->colorCar = "redd";
   $vinCode->typeCar = "Sedan";

   echo $vinCode->colorCar;
   echo $vinCode->typeCar;
   $vinCode->colorTest();



   class MarkCar extends Car implements Rules  {
       use Collect;
        function __construct($markaCar, $colorCar, $typeCar) 
        {
            $this->markaCar = $markaCar;
            $this->colorCar = $colorCar;
            $this->typeCar = $typeCar;
        }
        public function colorTest() 
        {
            if($this->colorCar === 'red'){
                echo $this->colorCar . 'TER/II' . " " .   $this->markaCar;
            } else {
                echo $this->colorCar . " " . 'TER/III' . " " . $this->typeCar;
            }   
        }
        public function test(){
//            return $this->typeCar . Rules::type;
        }
        public function debug(){
          
        }
   }
   $testArr =[];
    
   $vinCode = new MarkCar('BMW', 'DARK', 'SEDAN');
   $vinCode->colorTest();
   $vinCode->message($testArr);


   var_dump($testArr);




   class Flower {
    function __construct($type, $price)
     { 
        $this->type = $type;
        $this->price = $price;
    }
    public function giveMe() {
        echo $this->type . "/" . $this->price;
    }
    public function AllPrice() {
        return 0;
    }
    public function AllInfo() {
        return 0;
    }

   }
   class Flowers extends Flower {
       use Collect;
    function __construct($type, $price, $quantity)
    {  
        parent::__construct($type, $price);
        $this->quantity = $quantity;
    }
     function AllPrice() {
        return $this->quantity*$this->price;
    }
     function AllInfo() {
        return ' ' . $this->quantity*$this->price . ' ' . $this->type. ' ' .
        $this->quantity . ' ' ;
    }

   } 

//    $bk = new Flowers("Роза", 100, 13);
   
//    $bk->giveMe();
//    echo $bk->quantity;

//    $bk = [];
//    $bk[] = new Flowers("Роза", 123, 10);
//   $bk->message($testArr);
// //    var_dump($testArr);
   $allInfo ="";
   $allPrice = "";
//    echo "<pre>";
//    var_dump($bk);
//    echo "</pre>";
// foreach($bk as $item)
//  {
//     $allInfo .= $item->allInfo();
//     $allPrice .= $item->allPrice();

// }


echo "<br>" . $allInfo . "<br>";

echo $allPrice;



    
?>
</body>
</html>
