<?php

$color = ["red" => "赤", "bule" => "青", "green" => "緑"];
var_dump($color);
echo "<br>";
$color["yellow"] = "黄色";
var_dump($color);
echo "<br>";
echo "<br>";

echo "プルリクエストとは"."<br>";
echo "プルリクエストとは簡単に言うと、開発者のローカルリポジトリでの変更を他の開発者に通知する機能。"."<br>";
echo "Git flow とは"."<br>";
echo "Git flowは、それぞれ役割が振られているmaster, release, develop, feature, hot-fixの5つのブランチを使い分けて、開発を進めていくプラグインツール。"."<br>";
echo "cronとは"."<br>";
echo "UNIX系のOSに入っているプログラムで、指示された条件を満たす日時になると登録されているプログラムを動かしてくれる。";
?>