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
    <title>My Profile</title>
    <?php require_once('../header.php'); ?>
    <?php
    //Doctor Appointment cancel
if(isset($_REQUEST['delete'])){
    $del_id=$_REQUEST['del_id'];
    $sql="DELETE FROM appointment WHERE id='$del_id'";
    if($connect->query($sql)==TRUE){
      echo "<script>alert('Data deleted successfully!')</script>";
    }
    else{
      echo "<script>alert('Unable to delete data!')</script>";
    }
}
    //Service Appointment cancel
if(isset($_REQUEST['delete2'])){
    $del_id=$_REQUEST['del_id'];
    $sql="DELETE FROM service_appoint WHERE id='$del_id'";
    if($connect->query($sql)==TRUE){
      echo "<script>alert('Data deleted successfully!')</script>";
    }
    else{
      echo "<script>alert('Unable to delete data!')</script>";
    }
}
  ?>
</head>
<body>
    <br>
    <div class="container">
      <!-- My Account Details -->
  <div class="card">
  <div class="card-body">
    <h4 class="card-title">My Account</h4>
    <h2 class="card-subtitle mb-2 text-muted"><span class="class text-primary"><?php echo $user_name; ?></span></h2>
    <h5>Phone Number: <?php echo $user_phone; ?></h5>
    <h5>Gender: <span class="class text-success"><?php if($user_gender==0){echo "Male";}elseif($user_gender==1){echo "Female";}else{echo "Other";}; ?></span></h5>
    <h5>Age: <span class="class text-danger"><?php echo $user_age; ?></sp></h5>
    <p class="card-text">Address: <?php echo $user_address; ?></p>
  </div>
</div>
        <!-- Appointment Data table -->
        <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">My Doctors Appointments</h5>
              <!-- Table with stripped rows -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">My Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php
            $sql="SELECT * FROM appointment WHERE user_id='$id'";
            $result_a=$connect->query($sql);
            if ($result_a->num_rows>0) {
              while($ru=$result_a->fetch_assoc()):
  ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $ru['id']; ?></th>
                    <td>
                      <?php
                      $sql="SELECT * FROM doctors";
                      $result_doc1=$connect->query($sql);
                      while($row_doc_data=$result_doc1->fetch_assoc()):
                        if($row_doc_data['id']==$ru['doc_id']){
                          echo $row_doc_data['name'];
                        }
                      endwhile;
                      ?>
                    </td>
                    <td><?php
                    $sql="SELECT * FROM users";
                    $result_user1=$connect->query($sql);
                    while($row_user_data=$result_user1->fetch_assoc()):
                      if($row_user_data['id']==$ru['user_id']){
                        echo $row_user_data['name'];
                      }
                    endwhile;
                    
                   ?></td>
                    <td><?php echo $ru['date']; ?></td>
                    <td><?php echo $ru['time']; ?></td>
                    <td>
<form id="deleteForm" action="profile.php" method="POST"><input type="text" name="del_id" id="" value="<?php echo $ru['id']; ?>" hidden><button type="submit" name="delete" class="btn btn-outline-danger btn-sm">Cancel</button></form>
                  </td>
                  </tr>
                </tbody>
                <?php endwhile; ?>
                <?php
                }else{
                 echo "No Data Found!";
                 } ?>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
          <!-- Services Appointment Start -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">My Services Appointments</h5>
              <!-- Table with stripped rows -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Service Name</th>
                    <th scope="col">My Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php
            $sql="SELECT * FROM service_appoint WHERE user_id='$id'";
            $result_a=$connect->query($sql);
            if ($result_a->num_rows>0) {
              while($ru=$result_a->fetch_assoc()):
  ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $ru['id']; ?></th>
                    <td>
                      <?php
                      $sql="SELECT * FROM services";
                      $result_doc1=$connect->query($sql);
                      while($row_doc_data=$result_doc1->fetch_assoc()):
                        if($row_doc_data['id']==$ru['serv_id']){
                          echo $row_doc_data['name'];
                        }
                      endwhile;
                      ?>
                    </td>
                    <td><?php
                    $sql="SELECT * FROM users";
                    $result_user1=$connect->query($sql);
                    while($row_user_data=$result_user1->fetch_assoc()):
                      if($row_user_data['id']==$ru['user_id']){
                        echo $row_user_data['name'];
                      }
                    endwhile;
                    
                   ?></td>
                    <td><?php echo $ru['date']; ?></td>
                    <td><?php echo $ru['time']; ?></td>
                    <td>
<form id="deleteForm" action="profile.php" method="POST"><input type="text" name="del_id" id="" value="<?php echo $ru['id']; ?>" hidden><button type="submit" name="delete2" class="btn btn-outline-danger btn-sm">Cancel</button></form>
                  </td>
                  </tr>
                </tbody>
                <?php endwhile; ?>
                <?php
                }else{
                 echo "No Data Found!";
                 } ?>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
          <!-- Services Appointment End -->
        </div>
      </div>
    </section>
    </div>
    
    <!--Footer Section-->
    <?php require_once('../footer.php'); ?>
</body>
</html>