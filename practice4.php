PHP/Laravel 04

<?php
//課題1
function sum($max) {
  
  $result = $max*2;
  echo $result;
}
sum(3);

//課題2
function f($a, $b) {
  
  $result =$a + $b;
  echo $result;
}
f(3, 5);
 

//課題3
function x($arr){
  $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
  echo $result;
}
$arr = array(1, 3, 5, 7, 9);
echo x($arr);


//課題４
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a)
        {
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array(array(1,11,111,1111,11111));



//課題５
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";


$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98));

echo date('l \t\h\e jS');

?>
