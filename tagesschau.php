<?php
 error_reporting(E_ERROR | E_PARSE);
 $media_title = "Tagesschau";
 $URL = "https://www.tagesschau.de/download/podcast";
 $new_media_path = "";
 $str = file_get_contents($URL);
 $dom = new DOMDocument;
 $dom->loadHTML($str);
 foreach ($dom->getElementsByTagName('a') as $tag) {
        if(strpos($tag->getAttribute('href'),'.mp3')!==false)
        {
            $new_media_path = $tag->getAttribute('href');
            echo $new_media_path;
            break;	
  }
 }
?>