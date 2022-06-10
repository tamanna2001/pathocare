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
    <title>Services</title>
    <link rel="shortcut icon" href="../img/icon.jpg" type="image/x-icon">
</head>
<body>
  <!--nav section-->
  <?php require_once('../header.php'); ?>
  <div class="container">
  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Categories Data</h5>
              <!-- Table with stripped rows -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php
            $sql="SELECT * FROM categories";
            $result_doctors=$connect->query($sql);
            if ($result_doctors->num_rows>0) {
              while($ru=$result_doctors->fetch_assoc()):
  ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $ru['id']; ?></th>
                    <td><?php echo $ru['name']; ?></td>
                    <td>
                      <form id="deleteForm" action="<?php echo $site_url; ?>/pages/doctors.php?data=<?php echo $ru['id']; ?>" method="POST"><input type="text" name="del_id" id="" value="<?php echo $ru['id']; ?>" hidden><button type="submit" name="delete" class="btn btn-outline-primary">Book</button></form>
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
  </div>

   <!--Footer Section-->
   <?php require_once('../footer.php'); ?>
    
</body>
</html>
 