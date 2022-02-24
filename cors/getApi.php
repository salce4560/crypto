<?php
include './common/commonFun.php'
?>
<?php

//init curl
$ch = curl_init();
//curl_setopt可以設定curl參數
//設定url
curl_setopt($ch , CURLOPT_URL , "https://data.ntpc.gov.tw/api/datasets/4A03827A-588B-4058-AB21-EC02283E2BB7/json?page=0&size=10");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//設定AGENT
curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
//執行，並將結果存回
$result = curl_exec($ch);
//關閉連線
curl_close($ch);
echo json_decode($result)
?>