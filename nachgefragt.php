<?php
 error_reporting(E_ERROR | E_PARSE);
 $media_title = "Nachgefragt";
 $URL = "https://nachgefragt-podcast.de";
 $new_media_path = "";
 $str = file_get_contents($URL);
 $dom = new DOMDocument;
 $dom->loadHTML($str);

 // our url looks like this in the html source:
 //                                     <audio controls="controls" preload="none"><source src="https://nachgefragt-podcast.de/podlove/file/878/s/webplayer/c/home/ngf055-wissen-schwangerschaftsabbrueche-medizin.mp3" type="audio/mpeg"/></audio>
 // xpath to the audio tag
 
 $xpath = new DOMXPath($dom);
 $audio = $xpath->query('//source')->item(0);
 $new_media_path = $audio->getAttribute('src');
 echo $new_media_path;

?>