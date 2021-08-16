<?php
    $testFile = "test.txt";
    $contents = "こんにちは！";
    
    if (is_writable($testFile)) {
        $fp = fopen($testFile, "w");
        fwrite($fp, $contents);
        fclose($fp);
        echo "finish writing!!"; 
    } else {
        echo "not writable!";
        exit;
    }

    $test_file = "test2.txt";

    if(is_readable($test_file)) {
        $fp = fopen($test_file, "r");
        while ($line = fgets($fp)) {
            echo $line."<br>";
        }
        fclose($fp);
    } else {
        echo "not readable!";
        exit;
    } 
?>

<p>CakePHPの２系・３系の違い</p>
<p>モデルの変更。「偽」ORMと言えるものだった2系のORMが真にORMになる変更となっている。パフォーマンスの向上。</p>
<p>LAMPとは</p>
<p>Linux ＋ Apache ＋ MySQL（MariaDB） ＋ PHP（Perl、Python）で構成される環境のこと</p>
<p>AWSとは</p>
<p>AWSとはAmazon Web Servicesの略で、Amazonが提供している100以上のクラウドコンピューティングサービスの総称</p>
<p>クラウドコンピューティングとは、インターネットを介してサーバー・ストレージ・データベース・ソフトウェアといったコンピューターを使った様々なサービスを利用することを指します。</p>