<?php

include 'database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();


$name         =  $_POST['name'];
$email        =  $_POST['email'];
$bloodgroup   =  $_POST['bloodgroup'];
$gender       =  $_POST['gender'];
$function     =  $_POST['function'];
$text         =  $_POST['text'];
$profile      =  $_POST['profile'];
$id           =  $_POST['id'];

$function  = implode(',', $function);

$query = "update registrations set name='".$name."',  email = '".$email."' ,  bloodgroup = '".$bloodgroup."' , gender = '".$gender."' , function = '".$function."' , text = '".$text."' , profile = '".$profile."' where id=".$id;

if(mysqli_query($connection,$query)){
    echo "registration update succesfully";
}
else{
    echo 'Error updating registration';

}
header ('location: index.php');
?>