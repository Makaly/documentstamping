<?php

//The file path of the file that we want to move.
//In this case, we have a txt file called sample-file.txt
$currentFilePath = '//192.168.50.18/files/*.{PDF,pdf}';

//Where we want to move the file to. In this example, we
//are moving the .txt file from directory_a to directory_b
$newFilePath = '//192.168.50.18/pdf/';

//Move the file using PHP's rename function.
$fileMoved = rename($currentFilePath, $newFilePath);

if($fileMoved){
    echo 'Success!';


}