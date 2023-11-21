<?php 

  //rest parameter
    define('AGE',2);
    function message ($name,$v,...$z){
        // $name = $name;
        // $age = $age;
        // $roll = $roll;
        echo $name;
        print_r($z);
    }
    message("mamun",3,4,5,3,5,5);

    echo "<br>";

    // spread parameter
    $arr1 = [1,2,3,4];
    $arr2= [...$arr1,6,7];
    print_r($arr2);
    echo "<br>";

    function spredParameter($a,$b,$c,$d){
      return $a+$b+$c+$d;

    }
    echo spredParameter(...$value=[2,3,6,4]);
    echo "<br>";

    //concat array
    $array1 = [2,3,4];
    $array2 = [5,6,7];
    $after_marge = array_merge($array1,$array2);
    print_r($after_marge);
    echo "<br>";

   
  

?>