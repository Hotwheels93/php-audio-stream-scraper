<?php
 error_reporting(E_ERROR | E_PARSE);
 $media_title = "Beats & Bones";
 $URL = "https://beats-and-bones.podigee.io";
 $new_media_path = "";
 $str = file_get_contents($URL);
 $dom = new DOMDocument;
 $dom->loadHTML($str);

 foreach ($dom->getElementsByTagName('a') as $tag) {
// echo only first link
        if(strpos($tag->getAttribute('href'),'.mp3')!==false)
        {
            $url_cunstructor = $tag->getAttribute('href');
            $file_url = explode('?v',$url_cunstructor); 
            $new_media_path = ($file_url[0]);
            break;
            echo $new_media_path;
  }
 }

?>