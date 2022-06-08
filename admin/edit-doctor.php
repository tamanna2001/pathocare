<?php
    //Add database connection
    require_once('../auth.php');
    if(isset($_REQUEST['data_id'])){
      $data_id=$_REQUEST['data_id'];
    }
            $sql="SELECT * FROM doctors WHERE id='$data_id'";
            $result_doctors=$connect->query($sql);
            if ($result_doctors->num_rows>0) {
              $ru=$result_doctors->fetch_assoc();
            }

             //Update Data
 if(isset($_REQUEST['submit'])){
  if(($_REQUEST['name'] == "") || ($_REQUEST['reg_num'] == "")|| ($_REQUEST['ph_num'] == "")|| ($_REQUEST['time'] == "")|| ($_REQUEST['degree'] == "")|| ($_REQUEST['doc_type'] == "")){
    echo "All fields are required to add data!";
  }
  else{
    $name = $_REQUEST['name'];
    $reg_num = $_REQUEST['reg_num'];
    $ph_num = $_REQUEST['ph_num'];
    $time = $_REQUEST['time'];
    $degree = $_REQUEST['degree'];
    $doc_type = $_REQUEST['doc_type'];
    $sql = "UPDATE doctors SET name='$name',registration_number='$reg_num',phone_number='$ph_num',time='$time',degree='$degree',category='$doc_type' WHERE id='$data_id'";
    if($connect->query($sql)==TRUE){
      echo "<script>alert('Data update successfully!');
      window.location.replace('doctors.php');
      </script>";
    }
    else{
      echo "<script>alert('Unable to update data!');
      window.location.replace('doctors.php');
      </script>";
    }
  }
}
?>
<script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
<div id="output"></div>
<form id="updateForm" action="edit-doctor.php?data_id=<?php echo $ru['id']; ?>" method="POST">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Update Data</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- General Form Elements -->
                <div class="row mb-3">
                  <label for="inputText" class="col-lg-5 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="<?php echo $ru['name'];?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-lg-5 col-form-label">Registration Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="reg_num" value="<?php echo $ru['registration_number'];?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-lg-5 col-form-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ph_num" value="<?php echo $ru['phone_number'];?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-lg-5 col-form-label">Time</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="time" value="<?php echo $ru['time'];?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-lg-5 col-form-label">Degree</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="degree" value="<?php echo $ru['degree'];?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-lg-5 col-form-label">Doctor Type</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="doc_type" aria-label="Default select example">
                      <option>Select Doctor Type</option>
             <?php
              $sql="SELECT * FROM categories ORDER BY name ASC";
              $result_cat=$connect->query($sql);
              while($row_cat=$result_cat->fetch_assoc()):
            ?>
                      <option value="<?php echo $row_cat['id']; ?>" <?php if($ru['category']==$row_cat['id']){echo "selected";} ?>><?php echo $row_cat['name']; ?></option>
                <?php endwhile; ?>
                    </select>
                  </div>
                </div>
              <!-- End General Form Elements -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                        <!-- End Get Edit Data -->
                                        </div>
                  </div>
                    </form>