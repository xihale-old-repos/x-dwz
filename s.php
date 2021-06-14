<?php
include("config.php");
include("function.php");
$x=cha_dwz($_GET['s'],$value_file);
if($x!=-1)echo $x;
else echo "error";
?>