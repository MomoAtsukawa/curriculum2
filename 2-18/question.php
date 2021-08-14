<link rel="stylesheet" href="question.css">
<?php
    //POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST['my_name'];

    //①画像を参考に問題文の選択肢の配列を作成してください。
    $q1 = ["80", "22", "20", "21"];
    $q2 = ["PHP", "Python", "JAVA", "HTML"];
    $q3 = ["join", "select", "insert", "update"];


    //② ①で作成した、配列から正解の選択肢の変数を作成してください
    $a1 = $q1[0];
    $a2 = $q2[3];
    $a3 = $q3[1];
?>

<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
<div class="tests">

    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($q1 as $value1) {
       echo '<input type="radio" name="qes1" class="qes1" value="'.$value1.'">';
       echo $value1;
    }
    ?>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($q2 as $value2) {
       echo '<input type="radio" name="qes2" class="qes2" value="'.$value2.'">';
       echo $value2;
    }
    ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($q3 as $value3) {
       echo '<input type="radio" name="qes3" class="qes3" value="'.$value3.'">';
      echo $value3;
    }
    echo "<br>";
?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="a1" value="<?php echo $a1; ?>">
<input type="hidden" name="a2" value="<?php echo $a2; ?>">
<input type="hidden" name="a3" value="<?php echo $a3; ?>"> 
<input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
<input type="submit" value="回答する" class="respons">
</div>
