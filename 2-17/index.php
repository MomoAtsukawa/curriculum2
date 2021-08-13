<?php
    // すごろく
    $number = 0;
    for ($i = 1; $i <= 40;$i++) {
        $num = mt_rand(1, 6);
        $number += $num;
        echo $i."回目=".$num;
        echo "<br>";
        
        if($number >= 40) {
            echo "合計".$i."回でゴールしました";
            break;
        }
    } 
    echo "<br>";
    echo "<br>";

    // あいさつ
    date_default_timezone_set('Asia/Tokyo');
    $time = date("H", time());
    echo "今".$time."時台です";
    echo "<br>";
    intval($time);

    if ($time == 4 || $time == 5 || $time == 6 || $time == 7 || $time == 8 ||
    $time == 9 || $time == 10 || $time == 11) {
       echo "おはようございます";
   } elseif ($time == 12 || $time == 13 || $time == 14 || $time == 15 || $time == 16 || $time == 17){
       echo "こんにちは";
   } else {
       echo "こんばんは";
   }
?>