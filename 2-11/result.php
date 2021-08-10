<?php
$my_name = $_POST['my_name'];
$e_mail = $_POST['e_mail'];
$password = $_POST['password'];
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のメールアドレスは<?php echo $e_mail; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>

<?php
echo "<br>";
echo "仕様書と設計書とは"."<br>";
echo "仕様書には「結果」が書かれています。設計書には「過程」が書かれています。"."<br>";
echo "Gitとは"."<br>";
echo "ファイルのバージョン管理が簡単にできるツール"."<br>";
echo "複数のファイルやデータ、プログラムなどを、決められたルールに従って一つに統合することができるツール";

?>