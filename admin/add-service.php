<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pathocare - Admin</title>

  <?php require_once('header.php'); ?>
  <?php
if(isset($_REQUEST['submit'])){
  if(($_REQUEST['name'] == "")){
    echo "<script>alert('All fields are required to add data!');</script>";
  }
  else{
    $name = $_REQUEST['name'];
    $details = $_REQUEST['details'];
    $sql = "INSERT INTO services (name, details) VALUES ('$name', '$details')";
  }
  if($connect->query($sql)==TRUE){
    echo "<script>alert('Data added successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to insert data!');</script>";
  }
}
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Service</h1>
    </div><!-- End Page Title -->

    <div class="container">
      <!-- General Form Elements -->
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                  <div class="row mb-3">
                    <label for="inputText" class="col-lg-5 col-form-label">Service Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-lg-5 col-form-label">Service Details</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="details" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary" name="submit">Add New</button>
                    </div>
                  </div>
                </form><!-- End General Form Elements -->
    </div>

  </main><!-- End #main -->

  <?php require_once('footer.php'); ?>

</body>

</html>