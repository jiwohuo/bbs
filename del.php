<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 2017/8/28
 * Time: 17:40
 */
include 'conn.php';
$id = $_GET['id'];
$query = "delete from message where id=".$id;
mysql_query($query);


$url = "list.php";
echo "<script>window.location.href='$url'</script>";