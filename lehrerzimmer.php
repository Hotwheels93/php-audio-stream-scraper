<?php
 error_reporting(E_ERROR | E_PARSE);
 $media_title = "Lehrerzimmer Leaks";
 $URL = "https://www.deezer.com/de/show/2881782";
 $new_media_path = "";
 $str = file_get_contents($URL);
 $dom = new DOMDocument;
 $dom->loadHTML($str);
 $pos_end = strpos($str, "mp3");
 $pos_start = strrpos(substr($str, 0, $pos_end), "EPISODE_DIRECT_STREAM_URL");
 $new_media_path = substr($str, $pos_start+28, $pos_end - $pos_start - 25);
 $new_media_path = str_replace("\\/", "/", $new_media_path);
 echo $new_media_path;


?>

