<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 2017/8/28
 * Time: 17:40
 */
include ("conn.php");
$id = $_POST['id'];
$user = $_POST['user'];
$title = $_POST['title'];
$content = $_POST['content'];
if ($_POST['submit']){
    $sql = "insert into message (id,user,title,content,lastdate) value ('','$user','$title','$content',now())";
    mysql_query($sql);
    echo "<script>alert('添加成功！');history.go(-1);</script>";
}