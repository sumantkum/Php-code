

<?php

    if(file_exists("mytestfile.txt")){
        $file = fopen("mytestfile.txt","r");
    }
    else{
        die("<h1>Error: the file dose not exist friend. </h1> ");
    }

    

?>