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
    <h1><a href="index.php">YSE 講師データベース</a></h1>
</header>
<main>
    <h2>講師データ編集</h2>
    <table>
        <tr>
            <th>講師ID</th>
            <th>講師名</th>
            <th>メールアドレス</th>
            <th>携帯電話番号</th>
            <th>常勤/非常勤</th>
            <th></th>
        </tr>
<?php
// 編集画面
if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $record = $db->prepare('SELECT * FROM staff WHERE id=?');
    $record->execute(array($id));
    $record = $record->fetch();
}
?>
    <form action="update_do.php" method="post">
        <input type="hidden" name="id" value="<?php print($id); ?>">
        <tr>
            <td><?php print($record['id']); ?></td>
            <td><input type="text" name="staffname" value="<?php print($record['staffname']); ?>"></td>
            <td><input type="text" name="email" value="<?php print($record['email']); ?>"></td>
            <td><input type="text" name="tel" value="<?php print($record['tel']); ?>"></td>
            <?php
            if($record['stafftype']==0){
                print('<td><input type="radio" name="stafftype" value="0" checked>常勤');
                print('<input type="radio" name="stafftype" value="1">非常勤</td>');
            }else{
                print('<td><input type="radio" name="stafftype" value="0">常勤');
                print('<input type="radio" name="stafftype" value="1" checked>非常勤</td>');
            }
            ?>
            <td><input type="submit" value="更新"></td>
        </tr>
    </form>
    </table>
    <p><a href="index.php">&laquo; 戻る</a>
</main>

<footer>
    <p>Created by Sgroup.</p>
</footer>
</body>
</html>