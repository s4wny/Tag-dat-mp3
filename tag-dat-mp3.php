<?php

define('DS', '/');


$folder   = (isset($argv[1])) ? $argv[1] : '.';
$numFiles = 0;
$sucesses = 0;
$fails    = 0;
$warnings = 0;


//Boring settings and dependices
require_once('vendor/getid3/getid3.php');
require_once('vendor/getid3/write.php');

$getID3 = new getID3;
$getID3->setOption(array('encoding'=>'UTF-8'));

$tagwriter                    = new getid3_writetags;
$tagwriter->tagformats        = array('id3v2.3'); //array('id3v1', 'id3v2.3');
$tagwriter->remove_other_tags = false;
$tagwriter->tag_encoding      = 'UTF-8';



//The real code
foreach(glob($folder .'/*') as $artist)
{
    foreach(glob($artist .'/*') as $song)
    {
        $tagwriter->filename          = $song;
        $tagwriter->tag_data          = array(
            'title'         => array(pathinfo($song, PATHINFO_FILENAME)),
            'artist'        => array(basename($artist))
        );

        echo "Processing  '". $song ."'".PHP_EOL;
        

        //Yay
        if($tagwriter->WriteTags())
            if($tagwriter->warnings)
                $warnings++;
            else
                $sucesses++;
        else
            $fails++;


        $numFiles++;
    }
}



echo <<<OUT
Done.

Successes: $sucesses
Warnings:  $warnings
Fails:     $fails

Number of files: $numFiles

OUT;


?>