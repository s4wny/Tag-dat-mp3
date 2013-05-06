<?php

$folder = (isset($argv[1])) ? $argv[1] : '.';


foreach(glob($folder .'/*') as $artist)
{
    foreach(glob($artist .'/*') as $song)
    {

    }
}


?>