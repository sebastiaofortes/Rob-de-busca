<?php
 header('Content-type: text/html; charset=UTF-8');
$url = "https://olhardigital.com.br/noticias/";

$url2 = urlencode ($url);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$pagina = utf8_encode(curl_exec($ch));


$output = curl_exec($ch);
$output = iconv("Windows-1251", "UTF-8", $output);

echo mb_detect_encoding (curl_exec($ch));

$lua = fopen("olhardigital.html", "w");
fwrite($lua, $pagina);


include "olhardigital.html"
?>