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
                                    $sql="SELECT * FROM services";
                                    $result_serv=$connect->query($sql);
                                    $row_serv=$result_serv->num_rows;
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
            <div class="col-xxl-4 col-md-6">
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

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Services</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-clipboard-plus"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $row_serv; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

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

        </div><!-- End Right side columns -->

      </div>
    </section>
    <!-- Get Appointment Data -->
    <div class="card">
            <div class="card-body">
            <h5 class="card-title">Get Appointment Data</h5>
            <form action="">
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
            </form>
      </div>
      </div>

  </main><!-- End #main -->

  <?php require_once('footer.php'); ?>

</body>

</html>