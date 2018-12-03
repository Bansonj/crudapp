
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CRUD</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <?php 
    include('config.php');

    $name = $_GET['name'];
    $sql = "SELECT * FROM login WHERE name ='$name'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    
    ?>

    <!-- Start your project here-->
    <div class="container">
        <!--Panel-->
        <div class="row">
        <div class="col-md-6">
        <div class="card card-body">
            <!-- form -->
            <form action="update.php" method="POST">
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="name" name="name" class="form-control validate" required readonly value="<?php echo $row['name']; ?>"><!-- updated -->
                            <label for="name">Your Name</label>
                        </div>

                        <div class="md-form mb-5">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="email" name="email" class="form-control validate" required value="<?php echo $row['email']; ?>">
                            <label data-error="wrong" data-success="right" for="email">Your Email</label>
                        </div>
                        
                        <div class="md-form mb-5">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" id="phone"  name="phone" class="form-control validate" required value="<?php echo $row['phone']; ?>">
                            <label data-error="wrong" data-success="right" for="phone">Your Phone</label>
                        </div>

                        <div class="md-form mb-4">
                            <i class="fa fa-key prefix grey-text"></i>
                            <input type="text" id="pass" name="pass" class="form-control validate" required value="<?php echo $row['pass']; ?>">
                            <label data-error="wrong" data-success="right" for="pass">Your Password</label>
                        </div>

                    </div>
                
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" name="edit" class="btn btn-deep-orange">Save</button>
                        <button type="reset" class="btn btn-deep-orange">Reset</button>
                    </div>
                </form>
            </div>
        </div>   
    </div>
    </div>
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>