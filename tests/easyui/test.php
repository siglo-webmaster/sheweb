<?php
foreach($_REQUEST as $key => $value){
    file_put_contents("textfile2.txt", "llave:".$key." valor:".$value."  ||  ",FILE_APPEND);
    
}
file_put_contents("textfile2.txt", "
    ",FILE_APPEND);

?>
