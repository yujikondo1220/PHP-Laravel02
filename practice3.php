PHP/Laravel 03
<?php


//課題１
$name = "近藤ゆうじ";
if ($name == "近藤ゆうじ") {
  echo "私は あなたの 名前です。";
} else {
  echo "あなたの名前ではありません。";
}

//課題２
$total = 0;
echo  $total;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

//課題３
$fruits = array("apple", "orange", "peach", "banana", "melon");
foreach($fruits as $fruit){
  echo "要素は" . $fruit;
  echo "\n";
}

//課題４
for($i = 1; $i <= 100; $i++) {
  if($i % 5 == 0){
    echo $i;
  }
}