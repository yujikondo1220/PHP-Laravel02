PHP/Laravel 02
//課題１
<?php
$a = 3;
$b = 7;
echo $a + $b;

//課題２
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month [7];

//課題３
$hello = "Hello";
$name = "ゆーじ";
$world = "'s World!";
echo $hello , $name , $world;

//課題４
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;

//課題５
$_2018_calender = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "MAY" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
echo $_2018_calender["December"];