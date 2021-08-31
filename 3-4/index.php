<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="content">
            <div class="left">
                <img src="1599315827_logo.png">
            </div>
            <div class="right">
                <p class="name">
                ようこそ
                    <?php 
                        require_once("getData.php");
                        $user = new getData();
                        $user_info = $user->getUserData();
                        // var_dump($user->getUserData());
                        echo $user_info["last_name"];
                        echo $user_info["first_name"];

                    ?>
                さん
                </p>
                <p class="time">
                    最終ログイン日：
                        <?php
                        echo $user_info["last_login"];
                        ?>
                </p>
            </div>
        </div>
    </header>
    <main>
        <table>
            <tbody>
                <tr>
                    <th>記事ID</th>
                    <th>タイトル</th>
                    <th>カテゴリ</th>
                    <th>本文</th>
                    <th>投稿日</th>
                </tr>
                    <?php
                        $post_info = $user->getPostData();
                        // var_dump($user->getPostData());
                        foreach ($post_info as $contents) {
                            if ($contents['category_no'] == 1 ){
                                echo "<tr>"."<td>".$contents['id']."</td>"."<td>".$contents['title']."</td>"."<td>"."旅行"."</td>"."<td>".$contents['comment']."</td>"."<td>".$contents['created']."</td>"."</tr>";
                            } else if ($contents['category_no'] == 2) {
                                echo "<tr>"."<td>".$contents['id']."</td>"."<td>".$contents['title']."</td>"."<td>"."食事"."</td>"."<td>".$contents['comment']."</td>"."<td>".$contents['created']."</td>"."</tr>";
                            } else {
                                echo "<tr>"."<td>".$contents['id']."</td>"."<td>".$contents['title']."</td>"."<td>"."その他"."</td>"."<td>".$contents['comment']."</td>"."<td>".$contents['created']."</td>"."</tr>";
                            }
                        }
                    ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>Y&I group.inc</p>
    </footer>
</body>
</html>