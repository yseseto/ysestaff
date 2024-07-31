<?php 
require('dbconnect.php'); 
// 更新
if(!empty($_POST)){
    if($_POST['staffname'] != ''){
        $staff = $db->prepare('UPDATE staff SET staffname=?, email=?, tel=?, stafftype=? WHERE id=?');
        $staff->execute(array(
            $_POST['staffname'],
            $_POST['email'],
            $_POST['tel'],
            $_POST['stafftype'],
            $_POST['id']
        ));
        header('Location: index.php'); exit();
    }
}
?>
