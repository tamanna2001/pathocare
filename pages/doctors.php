<?php
    //Add database connection
    require_once('../auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <?php require_once('../header.php'); ?>
</head>
<body>
  <div class="container">
      <br>
      <h1>Doctors</h1>
    </div>
    <br>
    <br>
  <div class="container">
  <div class="row row-cols-3">
      <!--card start-->
            <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="../img/doc1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Taniya</h5>
                    <p class="card-text">Double M.B.B.S. from USA</p>
                    <p class="card-text"><small class="text-muted">From 10 A.M. - 9 P.M.</small></p>
                    <p><button type="button" class="btn btn-outline-primary btn-sm">Book Appointment</button></p>
                </div>
                </div>
            </div>
            </div>
      <!--card end-->
</div>
</div>
   <!--Footer Section-->
   <?php require_once('../footer.php'); ?>
    
</body>
</html>
 