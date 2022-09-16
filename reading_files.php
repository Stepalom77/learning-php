<?php 

$file = "example.txt";

if($handle = fopen($file, 'r')){ /*Opens a file  or creates it if it doesn't exists to read it*/
    echo $content =  fread($handle, filesize($file)); /*Read a file, the number represents the number of bits, each bit is a character, 
    filesize allows you to read the entire file*/
    fclose($handle); //Closes file
} else {
    echo "The application was not able read the file";
} 


?>