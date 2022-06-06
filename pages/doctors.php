<?php
    //Add database connection
    require_once('../auth.php');
    $data = $_GET['data'];
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
  <?php
            $sql="SELECT * FROM doctors WHERE category='$data'";
            $result_doctors=$connect->query($sql);
            if ($result_doctors->num_rows>0) {
              while($ru=$result_doctors->fetch_assoc()):
                $d_id=$ru['id'];
  ?>
      <!--card start-->
            <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="../img/doc1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $ru['name']; ?></h5>
                        <p class="card-text"><?php echo $ru['degree']; ?></p>
                        <p class="card-text"><small class="text-muted"><?php echo $ru['time']; ?></small></p>
                        <p><a href="<?php echo $site_url; ?>/pages/book.php?id=<?php echo $ru['id']; ?>" type="button" class="btn btn-outline-primary btn-sm">Book Appointment</a></p>
                    </div>
                </div>
            </div>
            </div>
                <?php endwhile; ?>
                <?php
                }else{
                 echo "No Data Found!";
                 } ?>
      <!--card end-->
</div>
</div>
   <!--Footer Section-->
   <?php require_once('../footer.php'); ?>
    
</body>
</html>
 