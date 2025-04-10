WAP in php to read data from a text file
<br>
<?php

    $file = fopen("Hi.txt", "r") or exit("Unable to open file!");
    //Output a line of the file until the end is reached
    while(!feof($file))
    {
        echo fgets($file). "<br>";
    }
    fclose($file);
   echo"This Program is written by Anushka Gupta 0221BCA155";
?>
