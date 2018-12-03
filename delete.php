<?php

include('config.php');
$name = $_GET['name'];

$sql = "DELETE FROM login WHERE name='$name'";

if(mysqli_query($con,$sql)){
   ?>
    <script>
    confirm('Student Successfully Deleted');//updated
    window.location = 'index.php';

    </script>
   <?php

   //echo "Deleted";

}
else{
    ?>
    <script>
    confirm('Student Deletion Failed');//updated
    window.location = 'index.php';

    </script>
   <?php

   //echo "Not Deleted";
}

?>