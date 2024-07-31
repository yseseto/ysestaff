<?php require('dbconnect.php'); ?>
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
    <h2>データの削除</h2>
<?php
if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $record = $db->prepare('DELETE FROM staff WHERE id=?');
    $record->execute(array($id));
}
?>
    <p><?php print($id.'のデータを削除しました。'); ?></p>
    <p><a href="index.php">&laquo; 戻る</a></p>
</main>

<footer>
    <p>Created by Sgroup.</p>
</footer>
</html>