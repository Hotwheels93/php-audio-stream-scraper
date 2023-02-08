<?php
 error_reporting(E_ERROR | E_PARSE);
 $media_title = "Hoaxilla";
 $URL = "https://podtail.com/de/podcast/hoaxilla-der-skeptische-podcast-aus-hamburg/";
 $new_media_path = "";
 $str = file_get_contents($URL);
 $dom = new DOMDocument;
 $dom->loadHTML($str);
 foreach ($dom->getElementsByTagName('a') as $tag) {
        if(strpos($tag->getAttribute('href'),'.mp3')!==false)
        {
            $new_media_path = $tag->getAttribute('href');
            // get the filename
            $new_media_path = 'https://media.hoaxilla.com/hoaxilla/'. substr($new_media_path, strrpos($new_media_path, '/') + 1);

            echo $new_media_path;
            break;	
  }
 }
?>
