<?php
function deldir($dir) {
   //先删除目录下的文件：
   $dh=opendir($dir);
   while ($file=readdir($dh)) {
      if($file!="." && $file!="..") {
         $fullpath=$dir."/".$file;
         if(!is_dir($fullpath)) {
            unlink($fullpath);
         } else {
            deldir($fullpath);
         }
      }
   }
   closedir($dh);
   //删除当前文件夹：
   if(rmdir($dir)) {
      return true;
   } else {
      return false;
   }
}
function cha_dwz($a)
{
	if(filesize("day")==0)return -1;
	$fp=fopen("day",'r');
	$file=explode("\n",fread($fp,filesize("day")));
	for($i=sizeof($file);$i>=0;$i--)
	{
		$x=explode(" ",$file[$i]);
		if($x[0]==$a)return $x[2];
	}
	return -1;
}
?>
