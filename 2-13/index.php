<?php
    $x = 1.5;

    echo ceil($x);
    echo "<br>";

    echo floor($x);
    echo "<br>";

    echo round($x);
    echo "<br>";

    echo 5.6 * 5.6 * pi();
    echo "<br>";

    echo mt_rand(15,56);
    echo "<br>";

?>

<?php
    $str = "Korilakkuma";

    echo $str;
    echo "<br>";

    echo strlen($str);
    echo "<br>";

    echo strpos($str, "a");
    echo "<br>";

    echo substr($str, -9, 9);
    echo "<br>";

    echo str_replace("r", "R", $str);
    echo "<br>";

    $str_2 = "りらっくま";
    echo mb_strlen($str_2);
    echo "<br>";

    printf("%sは、いつもだらだらしています", $str_2);
    echo "<br>";

    $str_3 = "こりらっくま";
    $str_4 = sprintf("%sは、いつもいたずらしています", $str_3);
    echo $str_4;

?>

<p>PostgreSQL、OracleSQLとは</p>
<p>リレーショナルデータベース（RDB）の作成や操作、管理ができるオープンソースのデータベース管理システム（DBMS）の一つ。</p>
<p>TortoiseGit、TortoiseSVNとは</p>
<p>TortoiseGitとはGitをより扱いやすくするために開発されたWindows用ソフトウェアです。TortoiseSVN は、バージョン管理システムであるSubversionのクライアントフロントエンドです。</p>
<p>内部設計・外部設計とは</p>
<p>操作画面や操作方法、データ出力など、ユーザーから見えるインターフェース部分の仕様を決定したり、セキュリティや運用規定、システム開発のスケジュールや費用などを設計したりと、基本的にユーザーに向けた仕様を設計するのが外部設計です。</p>
<p>システム内部の動作や機能、物理データなど、ユーザーから見えにくい詳細な部分の設計を行います。</p>

