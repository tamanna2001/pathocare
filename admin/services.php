<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pathocare - Admin</title>

  <?php require_once('header.php'); ?>
  <?php
  // Delete data
if(isset($_REQUEST['delete'])){
    $del_id=$_REQUEST['del_id'];
    $sql="DELETE FROM services WHERE id='$del_id'";
    if($connect->query($sql)==TRUE){
      echo "<script>alert('Data deleted successfully!')</script>";
    }
    else{
      echo "<script>alert('Unable to delete data!')</script>";
    }
}
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Services</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Services Data</h5>
              <!-- Table with stripped rows -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                    <th scope="col">Details</th>
                  </tr>
                </thead>
                <?php
            $sql="SELECT * FROM services";
            $result_doctors=$connect->query($sql);
            if ($result_doctors->num_rows>0) {
              while($ru=$result_doctors->fetch_assoc()):
  ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $ru['id']; ?></th>
                    <td><?php echo $ru['name']; ?></td>
                    <td><?php echo $ru['details']; ?></td>
                    <td>
                      <form id="deleteForm" action="Services.php" method="POST"><input type="text" name="del_id" id="" value="<?php echo $ru['id']; ?>" hidden><button type="submit" name="delete" class="btn btn-outline-danger">Delete</button></form>
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

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php require_once('footer.php'); ?>

</body>

</html>