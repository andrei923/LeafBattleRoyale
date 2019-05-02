
<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/repos/andrei923/LeafBattleRoyale/releases/latest');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HEADER, 0);

curl_setopt($ch, CURLOPT_USERAGENT, 'andrei923');

$output = curl_exec($ch);

if ($output === FALSE) {
   echo "cURL Error: " . curl_error($ch);
}

curl_close($ch);

$object = json_decode($output, true);

$array = new ArrayObject($object);

// URL

$download_url = $array["assets"][0]["browser_download_url"];

$download_url_cut = substr($download_url,8);

$version = $array["name"];

?>
