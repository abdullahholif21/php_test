<?php

 function getConnection(){
    try {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'tasksapp';
    return new mysqli($host, $user, $pass, $db);
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }



}
function execdb($sql){
    $conn=getConnection();
   if ( $conn->query($sql)==true)
   return true;
   else  return false;
}


?>