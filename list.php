<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 2017/8/28
 * Time: 17:40
 */
?>
<!DOCTYPE html>
<html lang="utf-8">
<head>
    <?php
    include ("conn.php");
    ?>
    <link href="css.css" rel="stylesheet" type="text/css">
</head>

<table width="500" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
    <?php
    $sql = "select * from message order by id desc";
    $query = mysql_query($sql);
    while($row = mysql_fetch_array($query)){
    ?>

        <tr bgcolor="#eff3ff">
            <td>
                <font color="red"> 标题：</font><?php echo $row['title'];?>
                <font color="red">用户：</font><?php echo $row['user'];?>
                <div align="right"><a href="del.php?id=<?php echo $row['id'];?>">删除</a></div>
            </td>
        </tr>
        <tr bgcolor="#ffffff">
            <td>发表内容：<?php echo $row['content'];?></td>
        </tr>
        <tr bgcolor="#ffffff">
            <td><div align="right">时间：<?php echo $row['lastdate'];?></div></td>
        </tr>
    <?php } ?>
        <tr bgcolor="#ffffff">
            <td><div align="right"><a href="add.html">返回留言</a></div></td>
        </tr>
</table>

</html>
