<link rel="stylesheet" href="answer.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$my_name = $_POST['my_name'];
$qes1 = $_POST['qes1'];
$qes2 = $_POST['qes2'];
$qes3 = $_POST['qes3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function test($a, $qes) {
    if($a == $qes) {
        echo "正解！"."<br>";
    } else {
        echo "残念・・・"."<br>";
    }
}
?>
<div class="answers">
    <p><?php echo $my_name; ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <div class="result">
    <?php test($a1, $qes1); ?>
    </div>

    <p>②の答え</p>
    <div class="result">
        <?php test($a2, $qes2); ?>
    </div>  

    <p>③の答え</p>
    <div class="result">
        <?php test($a3, $qes3); ?>
    </div>
</div>