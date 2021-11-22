<?php

$url = "https://randomuser.me/api/";
$resoure = curl_init($url);
curl_setopt($resoure,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($resoure);
echo $result;