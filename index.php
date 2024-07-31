<?php 
require('dbconnect.php'); 
?>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>YSE 講師データベース</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<header>
    <h1>YSE 講師データベース</h1>
</header>
<main>
    <h2>講師データ一覧</h2>
    <table>
        <tr>
            <th>講師ID</th>
            <th>講師名</th>
            <th>メールアドレス</th>
            <th>携帯電話番号</th>
            <th>常勤/非常勤</th>
            <th>登録日</th>
            <th>更新日</th>
            <th colspan="2"></th>
        </tr>
<?php
// 一覧表示
$records = $db->query('SELECT * FROM staff ORDER BY id');
?>
<?php while($record = $records->fetch()): ?>
        <tr>
            <td><?php print($record['id']); ?></td>
            <td><?php print($record['staffname']); ?></td>
            <td><?php print($record['email']); ?></td>
            <td><?php print($record['tel']); ?></td>
            <?php
            if($record['stafftype']==0){
                print('<td>常勤</td>');
            }else{
                print('<td>非常勤</td>');
            }
            ?>
            <td><?php print($record['created']); ?></td>
            <td><?php print($record['modified']); ?></td>
            <td><form id="f_edit" action="update.php?id=<?php print($record['id']); ?>" method="post">
                <input type="submit" value="編集"></form></td>
            <td><form id="f_delete" action="delete.php?id=<?php print($record['id']); ?>" method="post">
                <input type="submit" value="削除"></form></td>
        </tr>
<?php endwhile; ?>
    </table>
    <p><a href="input.html">&raquo; 新規登録</a>
</main>

<footer>
    <p>Created by Sgroup.</p>
</footer>
</body>
</html>