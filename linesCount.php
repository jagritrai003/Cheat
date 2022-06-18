<?php
$filename="pt.txt";
$fp=fopen($filename,"r+");
$line=0;
while(!feof($fp))
{
  fgets($fp);
  $line++;
}
echo $line;
fclose($fp)
?>
