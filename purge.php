<?php
include("function.php");
$fp=fopen("day","r");
$file=explode("\n",fread($fp,filesize("day")));
$day=date("Ymd");
for($i=sizeof($file);$i>=0;$i--)
{
	$x=explode(" ",$file[$i]);
	if($day>$x[1]&&$x[1]!="")
	{
		deldir($x[0]);
		echo "已删除".$x[0]."<br>";
		$file[$i]="";
	}
}
fclose($fp);
//写入新文件
$fp=fopen("day","w");
foreach ($file as $x)
{
	if($x!="")
	{
		fwrite($fp,$x."\n");
	}
}
fclose($fp);
?>