<?php
echo 'hello php!';
echo "\n";
//1
$name = "古賀大樹";
if ($name == "古賀大樹") {
    echo "私は古賀大樹です。";
} else {
    echo "あなたの名前ではありません。";
} 
echo "\n";
//2
$total2 = 0;
echo $total2;
echo "\n";

for ($i = 0; $i <= 10000; $i++) {
  $total2 += $i;
}
echo $total2;
echo "\n";
//3
$bag = array("メロン", "イチゴ", "スイカ", "なし", "ぶどう");

foreach($bag as $reizouko){
    echo $reizouko;
    echo "\n";
}
//4 
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0) {
      echo $i; echo "\n";
  }
}