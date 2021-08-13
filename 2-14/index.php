<?php
    $members = ["Rilakkuma", "Korilakkuma", "Chairoikoguma", "Kiiroitori"];
    echo count($members);
    echo "<br>";

    sort($members);
    var_dump($members);
    echo "<br>";

    if (in_array("Rilakkuma", $members)) {
        echo "りらっくまがいるよ";
    } else {
        echo "りらっくまはいないよ。。。";
    }
    echo "<br>";

    $str = implode("!", $members);
    var_dump($str);
    echo "<br>";

    $str_1 = explode("!", $str);
    var_dump($str_1);
    echo "<br>";
    echo "<br>";
?>

<p>要件定義とは</p>
<p>要件定義は、本格的な開発工程の前段階で、開発者の視点から要求をまとめ、具体的な進め方を決めることです。</p>
<p>単体テスト、結合テストとは</p>
<p>単体テストは単体機能、結合テストは機能間・他システム間のテスト</p>
<p>テスト仕様書とは</p>
<p>システムやソフトウェアが、クライアントのヒアリングをもとに作り上げた要件定義書の通りに機能するかどうか、テストするポイントをまとめたドキュメント</p>
<p>テストすべき全ての機能、機能をテストするための切り口（テスト観点）、テスト観点のレビューや注釈、を書く</p>