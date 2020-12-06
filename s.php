<?php
include("function.php");
$x=cha_dwz($_GET['s']);if($x!=-1)echo '<meta http-equiv="refresh" content="0;url='.cha_dwz($_GET['s']).'">';
else echo "查询失败!";
?>