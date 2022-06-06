<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pathocare - Admin</title>

  <?php require_once('header.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Doctors</h1>
    </div><!-- End Page Title -->

    <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Doctors</h5>

              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-lg-5 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-lg-5 col-form-label">Registration Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-lg-5 col-form-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-lg-5 col-form-label">Time</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-lg-5 col-form-label">Degree</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-lg-5 col-form-label">Doctor Type</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected="">Select Doctor Type</option>
             <?php
              $sql="SELECT * FROM categories ORDER BY name ASC";
              $result_cat=$connect->query($sql);
              while($row_cat=$result_cat->fetch_assoc()):
            ?>
                      <option value="<?php echo $row_cat['id']; ?>"><?php echo $row_cat['name']; ?></option>
                <?php endwhile; ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add New</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

  </main><!-- End #main -->

  <?php require_once('footer.php'); ?>

</body>

</html>