<?php
function db(){
    global $link;
    $link = mysqli_connect('localhost', 'root', '', 'todolist') or die('could not connect to database');
    return $link;
}

if(db()){
    echo 'I am connected';
}
?>