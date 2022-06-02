<?php

include 'database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();

$id = $_GET['id'];
$query = "DELETE FROM registrations WHERE id=".$id;

if(mysqli_query($connection,$query)){
    echo 'registration delete successfully';
}
else{
    echo 'error deleting registration: '.mysqli_error($connection);
}

header ('location: index.php');

?>
