<?php

include('config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['pass'];

$sql = "SELECT * FROM login WHERE name = '$name'";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

if($row['name']==$name){
    ?>
    <script>
        confirm('Student Already Exist, Enter a New One.');
        window.location = "index.php";
    </script>

    <?php
}

else{
    $data = "INSERT INTO login(name, email, phone, pass) values('$name', '$email', '$phone', '$password')";

    if(mysqli_query($con,$data)){
        //echo "Student Added!";
        ?>
            <script>
                confirm('Student Successfully Added, Thank you!.');
                window.location = "index.php";
            </script>

        <?php
    }
    else{
        //echo "Student Not Added!";

        ?>
            <script>
                alert('Student Could Not Be Added, Try Again!');
                window.location = "index.php";
            </script>

        <?php
    }
}


?>