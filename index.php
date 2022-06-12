<?php
    //Add database connection
    require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pathocare</title>
<link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <?php require_once('header.php'); ?>
  </head>
  <body>
    <main>
      <br>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/cover1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/cover3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/cover2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/img1.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">No. 1 Diagnostic Lab Cum Doctors Chamber in Your Area</h1>
            <p class="lead">We focus on providing patients quality diagnostic healthcare services and doctors appointment booking in India. Through our network, we offer patients convenient locations for their diagnostic laboratory services and efficient service. With over 5000+ diagnostic tests and related healthcare tests and services offered, we believe we are capable of performing substantially all of the diagnostic healthcare tests and services currently prescribed by physicians in India. By delivering most accurate reports over the years, Pathocare has earned the reputation of being amongst the most trustworthy and reliable pathology labs in India.

</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            </div>
          </div>
        </div>
      </div>

      <div class="container px-4 py-2" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Recent Doctors</h2>
        <div class="container">
  <div class="row row-cols-3">
  <?php
            $sql="SELECT * FROM doctors";
            $result_doctors=$connect->query($sql);
            if ($result_doctors->num_rows>0) {
              while($ru=$result_doctors->fetch_assoc()):
                $d_id=$ru['id'];
  ?>
      <!--card start-->
            <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="img/doc1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $ru['name']; ?></h5>
                        <p class="card-text"><?php echo $ru['degree']; ?></p>
                        <p class="card-text"><small class="text-muted"><?php echo $ru['time']; ?></small></p>
                        <p><a href="<?php echo $site_url; ?>/pages/book.php?id=<?php echo $ru['id']; ?>" type="button" class="btn btn-outline-primary btn-sm">Book Appointment</a></p>
                    </div>
                </div>
            </div>
            </div>
                <?php endwhile; ?>
                <?php
                }else{
                 echo "No Data Found!";
                 } ?>
      <!--card end-->
</div>
</div>
      </div>
    </main>
    <?php require_once('footer.php'); ?>
  </body>
</html>
