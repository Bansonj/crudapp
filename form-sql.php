<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Lesson 21 | PHP MySQL</title>
  </head>
  <body>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">JavaScript Form Validation</h1>
            <p class="lead">Form Validation with Bootstrap</p>
        </div>
    </div>

    <div class="container">
        <form action="insertOne.php" method="post" onsubmit="return validForm()" name="form1" autocomplete>
        
        <div class="col-md-6 form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>

        <div class="col-md-6 form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="col-md-6 form-group">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" name="phone" id="phone">
        </div>

        <div class="col-md-6 form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" name="pass" id="pass">
        </div>

        <div class="col-md-6 form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" name="cpassword" id="cpasswords">
        </div>

        <div class="col-md-6 form-group">
            <label for="date">Date Of Birth</label>
            <input type="date" class="form-control" name="date" id="date">
        </div>
        <div class="col-md-6 form-group">
            <textarea name="text" id="text" cols="65" rows="6" placeholder="Enter A Message..."></textarea>
        </div>
        <div class="col-md-6 form-group">
            <input type="submit" class="btn btn-info">
        </div>
        
        
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/script3.js"></script>
  </body>
</html>