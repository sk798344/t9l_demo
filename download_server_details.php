<?php
$ch = curl_init();
$source = "http://parentsskhool.com/admin/store_update_version/frontend.zip";
curl_setopt($ch, CURLOPT_URL, $source);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec ($ch);
curl_close ($ch);

$destination = "../frontend.zip";



$file = fopen($destination, "w+");
fputs($file, $data);
fclose($file);
?>