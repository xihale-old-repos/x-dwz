<?php
function cha_dwz($a,$value_file)
{
	if(filesize($value_file)==0)return -1;
	$fp=fopen($value_file,'r');
	$file=explode("\n",fread($fp,filesize($value_file)));
	for($i=sizeof($file);$i>=0;$i--)
	{
		$x=explode(" ",$file[$i]);
		if($x[0]==$a)return $x[2];
	}
	return -1;
}
?>