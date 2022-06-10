<?php
    //Add database connection
    require_once('../auth.php');
    if($login!=1){
      header('location: ../login.php');
  }
        //Insert appointment data
        if(isset($_REQUEST['submit'])){
            if(($_REQUEST['serv_id'] == "") || ($_REQUEST['user_id'] == "")|| ($_REQUEST['date'] == "")|| ($_REQUEST['time'] == "")){
              echo "<script>alert('All fields are required to add data!');</script>";
            }
            else{
              $serv_id = $_REQUEST['serv_id'];
              $user_id = $_REQUEST['user_id'];
              $date = $_REQUEST['date'];
              $time = $_REQUEST['time'];
              
              $sql = "INSERT INTO service_appoint (serv_id,user_id,date,time) VALUES ('$serv_id','$user_id','$date','$time')";
            }
            if($connect->query($sql)==TRUE){
              echo "<script>alert('Appointment booked successfully!');</script>";
            }
            else{
              echo "<script>alert('Unable to book Appointment!');</script>";
            }
          }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <?php require_once('../header.php'); ?>
</head>
<body>
    <br>
    <div class="container">
    <?php
    if(isset($_REQUEST['id'])){
        $servid=$_REQUEST['id'];
        //Get Data from SQL
        $sql="SELECT * FROM services WHERE id='$servid';";
        $result=$connect->query($sql);
        $row_serv=$result->fetch_assoc();
    ?>
        <div class="card" style="width: 50rem;">
        <div class="card-body">
        <h2> <span style="color:green;"><?php echo $row_serv['name']; ?></span></h2>
        <p><?php echo $row_serv['details']; ?></p>
        <h5 class="card-title">Book Apppointment between,<br><b><?php echo $row_serv['time']; ?></b></h5>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <input type="text" class="form-control" name="serv_id" value="<?php echo $row_serv['id']; ?>" hidden>
            <input type="text" class="form-control" name="user_id" value="<?php echo $id; ?>" hidden>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">My Name</label>
            <input type="text" class="form-control" value="<?php echo $user_name; ?>" disabled>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Age</label>
            <input type="text" class="form-control" value="<?php echo $user_age; ?>" disabled>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date</label>
            <input type="date" class="form-control" name="date" required>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Time</label>
            <input type="time" class="form-control" name="time" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mb-3">Book Appointment</button>
        </form>
        </div>
        </div>
    </div>
    <?php
    }
    else{
        echo "<script>window.location.replace('profile.php');</script>Something Went Wrong!";
    }
    ?>
    <!--Footer Section-->
    <?php require_once('../footer.php'); ?>
</body>
</html>