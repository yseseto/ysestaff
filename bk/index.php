<?php 
require('dbconnect.php'); 

// 新規登録
if(!empty($_POST)){
    if($_POST['staffname'] != ''){
        $message = $db->prepare('INSERT INTO staff SET staffname=?, email=?, tel=?, created=NOW()');
        $message->execute(array(
            $_POST['staffname'],
            $_POST['email'],
            $_POST['tel']
        ));
        header('Location: index.php'); exit();
    }
}



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
    <h1>YSE 講師データベース</h1>
    <h2>新規登録</h2>
    <form action="" method="post">
        <table>
            <tr>
                <th>講師ID</th>
                <th>講師名</th>
                <th>メールアドレス</th>
                <th>携帯電話番号</th>
                <th>常勤/非常勤</th>
                <th></th>
            </tr>
            <tr>
                <td>（自動）</td>
                <td><input type="text" name="staffname"></td>
                <td><input type="email" name="email"></td>
                <td><input type="tel" name="tel"></td>
                <td><input type="radio" name="stafftype" value="0">常勤
                    <input type="radio" name="stafftype" value="1">非常勤</td>
                <td><input type="submit" value="登録"></td>
            </tr>
        </table>
    </form>

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
        </tr>
<?php
// 一覧表示
$records = $db->query('SELECT * FROM staff ORDER BY id');
?>
<?php while($record = $records->fetch()): ?>
    <form action="" method="post">
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
            <td><?php print($record['created']); ?></td>
            <td><?php print($record['modified']); ?></td>
        </tr>
    </form>
<?php endwhile; ?>
    </table>
</body>
</html>