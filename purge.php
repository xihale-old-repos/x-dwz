<?php
include("function.php");
include("config.php");
$fp=fopen($value_file,"r");
$file=explode("\n",fread($fp,filesize($value_file)));
$day=date("Ymd");
for($i=sizeof($file);$i>=0;$i--)
{
	if($file[$i]=="")continue;
	$x=explode(" ",$file[$i]);$sum=0;
	for($j=sizeof($file);$j>=0;$j--)
	{
		$x1=explode(" ",$file[$j]);
		if($x[0]==$x1[0])$sum++;
		if($x[0]==$x1[0]&&$sum>1)$file[$j]="";
	}
	if($day>$x[1]&&$x[1]!="")
	{
		echo "已删除".$x[0]."<br>";
		$file[$i]="";
	}
}
fclose($fp);
//写入新文件
$fp=fopen($value_file,"w");
foreach ($file as $x)
{
	if($x!="")
	{
		fwrite($fp,$x."\n");
	}
}
fclose($fp);
?>