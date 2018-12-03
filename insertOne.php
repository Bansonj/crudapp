<?php

include('config.php');

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['phone'];
$d = $_POST['pass'];

$sql = "SELECT * FROM login WHERE email = '$b'";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

if($row['email']==$b){
    ?>
    <script>
        alert('Email Already Exist, Enter a new one.');
        window.location = "index.php";
    </script>

    <?php
}

else{
    $s = "INSERT INTO login(name, email, phone, pass) values('$a', '$b', '$c', '$d')";

    if(mysqli_query($con,$s)){
        echo "Query not passed!".mysqli_error($s);
    }
}


?>