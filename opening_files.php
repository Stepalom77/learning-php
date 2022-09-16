<?php 

$file = "example.txt";

if($handle = fopen($file, 'w')){ /*Opens a file  or creates it if it doesn't exists to write in it*/
    fwrite($handle, 'PHP is good'); //Write to a file
    fclose($handle); //Closes file
} else {
    echo "The application was not able to write on the file";
} 





?>