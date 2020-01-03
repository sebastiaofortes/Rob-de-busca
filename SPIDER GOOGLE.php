<?php
 header('Content-type: text/html; charset=UTF-8');
$url = "https://www.google.com.br/search?q=olhar+digital&sxsrf=ACYBGNQXvTlSKlwx_bRAgU23b4RiAxy3sg:1568576841299&source=lnms&tbm=nws&sa=X&ved=0ahUKEwjQxbaLzNPkAhVBt3EKHSphCA4Q_AUIESgB&biw=1821&bih=868";

$url2 = urlencode ($url);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$pagina = utf8_encode(curl_exec($ch));


$output = curl_exec($ch);
$output = iconv("Windows-1251", "UTF-8", $output);

echo mb_detect_encoding (curl_exec($ch));

$lua = fopen("google.html", "w");
fwrite($lua, $pagina);


include "google.html"
?>