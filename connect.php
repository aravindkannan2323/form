<?php  

$con=mysqli_connect('localhost' , 'root' , '','imageuploadproject');
if($con){
    echo "connection successful";
}else{
    die(mysqli_error($connection));
}

?>