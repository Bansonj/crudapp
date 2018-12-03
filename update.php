<?php

include('config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['pass'];

$sql = "UPDATE login SET email='$email', phone='$phone', pass='$password' WHERE name='$name'";


if(mysqli_query($con,$sql)){
   ?>
    <script>
    confirm('Student Successfully Updated!');//updated
    window.location = 'index.php';

    </script>
   <?php
   //echo "Update Successful";
}
else{
    ?>
    <script>
    confirm('Student Update Failed, Try Again!');//updated
    window.location = 'index.php';

    </script>
   <?php

   //echo "Update Failed";
}



?>