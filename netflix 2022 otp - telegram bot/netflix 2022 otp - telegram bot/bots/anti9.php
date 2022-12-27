<?php
$api = "2035318780:AAFF95W4a9Q4qlACGjeLPXzsDT4ekyMVO0I";
$chatid = "-1001720366439";
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );

?>