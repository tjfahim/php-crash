<?php 

$file='extras/users.txt';

if(file_exists($file)){
    $handle= fopen($file, 'r');
    $contents= fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
    
}else{
    $handle= fopen($file,'w');
    $contents= 'fahim1 is booss' ;
    fwrite($handle, $contents);
    fclose($handle);
    echo $contents;

  
}