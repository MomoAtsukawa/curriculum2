<?php
    // すごろく
    $number = 0;
    $i = 0;
    while($number <= 40) {
        $num = mt_rand(1, 6);
        $number += $num;
        ++$i;
        echo $i."回目=".$num;
        echo "<br>";
    } 
    echo "合計".$i."回目でゴールしました";
    echo "<br>";
    echo "<br>";

    // あいさつ
    date_default_timezone_set('Asia/Tokyo');
    $time = date("H", time());
    echo "今".$time."時台です";
    echo "<br>";
    intval($time);
    if ($time >= 5 && $time <= 10) {
       echo "おはようございます";
   } elseif ($time >= 11 && $time <= 17){
       echo "こんにちは";
   } else {
       echo "こんばんは";
   }
?>