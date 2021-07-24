<?php
  $file = fopen("numbers.json", "r") or die('File is no longer alive!');
  $json = json_decode(fread($file, filesize("numbers.json")));
  print_r($json->base);
?>
