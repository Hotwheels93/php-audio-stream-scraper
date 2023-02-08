<?php
 error_reporting(E_ERROR | E_PARSE);
 $media_title = "Science Busters";
 $URL = "https://sciencebusterspodcast.podigee.io";
 $new_media_path = "";
 $str = file_get_contents($URL);
 $dom = new DOMDocument;
 $dom->loadHTML($str);

 foreach ($dom->getElementsByTagName('a') as $tag) {
        if(strpos($tag->getAttribute('href'),'.mp3')!==false){
            $url_cunstructor = $tag->getAttribute('href');
            $file_url = explode('?v',$url_cunstructor); 
            $new_media_path = ($file_url[0]);
            $new_media_path = strstr($new_media_path, '.mp3', true);
            $new_media_path = $new_media_path . ".mp3";
            echo $new_media_path;
            break;
        }
    }

?>