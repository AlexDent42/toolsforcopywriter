<?php


$domains = explode("\n", file_get_contents('urls.txt'));
  array_splice($domains,1000);
   $string=implode("\n",$domains);
 
  file_put_contents('urls.txt',$string);
?>