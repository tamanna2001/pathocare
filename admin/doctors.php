<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pathocare - Admin</title>

  <?php require_once('header.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Doctors</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Doctors Data</h5>
              <!-- Table with stripped rows -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Registration Number</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Time</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Category</th>
                  </tr>
                </thead>
                <?php
            $sql="SELECT * FROM doctors";
            $result_doctors=$connect->query($sql);
            if ($result_doctors->num_rows>0) {
              while($ru=$result_doctors->fetch_assoc()):
                $d_id=$ru['id'];
  ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $ru['id']; ?></th>
                    <td><?php echo $ru['name']; ?></td>
                    <td><?php echo $ru['registration_number']; ?></td>
                    <td><?php echo $ru['phone_number']; ?></td>
                    <td><?php echo $ru['time']; ?></td>
                    <td><?php echo $ru['degree']; ?></td>
                    <td><?php echo $ru['category']; ?></td>
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