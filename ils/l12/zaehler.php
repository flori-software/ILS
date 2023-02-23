<?php
$fp = @fopen('z.txt', 'r');
if ($fp == false) {
  $str = 1;
  $fp = fopen('z.txt', 'w');
  fclose($fp);
} else {
  $str = fgets($fp, 11);
  fclose($fp);
}
echo $str++;
$fp = fopen('z.txt', 'w');
fputs($fp, $str, 11);
fclose($fp);
?>