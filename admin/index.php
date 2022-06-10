<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pathocare - Admin</title>

  <?php require_once('header.php'); ?>

  <?php
                                    //Doctors Data
                                    $sql="SELECT * FROM doctors";
                                    $result_doc=$connect->query($sql);
                                    $row_doc=$result_doc->num_rows;
                                    //Users Data
                                    $sql="SELECT * FROM users";
                                    $result_user=$connect->query($sql);
                                    $row_user=$result_user->num_rows;
                                    //Services Data
                                    $sql="SELECT * FROM categories";
                                    $result_serv=$connect->query($sql);
                                    $row_cate=$result_serv->num_rows;
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Doctors</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $row_doc; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-4">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Users</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $row_user; ?></h6>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            <!-- Categories Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Categories</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-clipboard-plus"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $row_cate; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Categories Card -->
        </div><!-- End Right side columns -->

      </div>
    </section>
    <!-- Get Appointment Data -->
    <div class="card">
            <div class="card-body">
            <h5 class="card-title">Get Appointment Data</h5>
            <!-- <form action="">
            <div class="row mb-3">
                      <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control">
                      </div>
            </div>
            <div class="row mb-3">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Get Data</button>
                          </div>
                        </div>
            </form> -->
            <!-- Appointment Data table -->
            <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Doctors Appointments</h5>
              <!-- Table with stripped rows -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">User Age</th>
                  </tr>
                </thead>
                <?php
            $sql="SELECT * FROM appointment";
            $result_a=$connect->query($sql);
            if ($result_a->num_rows>0) {
              while($ru=$result_a->fetch_assoc()):
  ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $ru['id']; ?></th>
                    <td><?php echo $ru['date']; ?></td>
                    <td><?php echo $ru['time']; ?></td>
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
                        $user_age=$row_user_data['age'];
                      }
                    endwhile;
                    
                   ?></td>
                   <td><?php echo $user_age; ?></td>
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
     <!-- Appointment Data table -->
     <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Services Appointment</h5>
              <!-- Table with stripped rows -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Service Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">User Age</th>
                  </tr>
                </thead>
                <?php
            $sql2="SELECT * FROM service_appoint";
            $result_b=$connect->query($sql2);
            if ($result_b->num_rows>0) {
              while($rs=$result_b->fetch_assoc()):
  ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $rs['id']; ?></th>
                    <td><?php echo $rs['date']; ?></td>
                    <td><?php echo $rs['time']; ?></td>
                    <td>
                      <?php
                      $sql="SELECT * FROM services";
                      $result_doc1=$connect->query($sql);
                      while($row_doc_data=$result_doc1->fetch_assoc()):
                        if($row_doc_data['id']==$rs['serv_id']){
                          echo $row_doc_data['name'];
                        }
                      endwhile;
                      ?>
                    </td>
                    <td><?php
                    $sql="SELECT * FROM users";
                    $result_user1=$connect->query($sql);
                    while($row_user_data=$result_user1->fetch_assoc()):
                      if($row_user_data['id']==$rs['user_id']){
                        echo $row_user_data['name'];
                        $user_age=$row_user_data['age'];
                      }
                    endwhile;
                    
                   ?></td>
                   <td><?php echo $user_age; ?></td>
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
      </div>

  </main><!-- End #main -->

  <?php require_once('footer.php'); ?>

</body>

</html>