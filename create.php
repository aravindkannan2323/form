<?php 

include '../database/database.php';

$dbobj = new Database();
$connection = $dbobj->createconnection();

$name         =  $_POST['name'];
$email        =  $_POST['email'];
$bloodgroup   =  $_POST['bloodgroup'];
$gender       =  $_POST['gender'];
$function     =  $_POST['function'];
$text         =  $_POST['text'];


$function = implode(',', $function);

$t = $_FILES['image']['tmp_name'];
$p = "image/user/".$_FILES['image']['name'];


move_uploaded_file($t,$p);


$query = "INSERT INTO registrations ( name, email, bloodgroup , gender, function, text,image )
VALUES ('$name', '$email', '$bloodgroup', '$gender', '$function', '$text', '$p')";

if (mysqli_query($connection,$query)) { 
    echo "registration record created sucessfully!";
  }else {
      echo 'Error creeting data: ' .mysqli_error($connection);
  }

  if(isset($_FILES["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
 header ('location: index.php');

?>
