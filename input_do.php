<?php 
require('dbconnect.php'); 

// 新規登録
if(!empty($_POST)){
    if($_POST['staffname'] != '' && $_POST['email'] != '' && $_POST['stafftype'] != ''){
        $staff = $db->prepare('INSERT INTO staff SET staffname=?, email=?, tel=?, stafftype=?, created=NOW()');
        $staff->execute(array(
            $_POST['staffname'],
            $_POST['email'],
            $_POST['tel'],
            $_POST['stafftype']
        ));
        header('Location: index.php'); exit();
    }else{
        print('必須項目が入力されていません！');
        print('<a href="input.html">戻る</a>');
    }
}
?>
