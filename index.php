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
      <img src="img/ab_banner.jpg" width="99.7%" >
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/img1.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">No. 1 Pathology Lab in Your Area</h1>
            <p class="lead">We focus on providing patients quality diagnostic healthcare services in India. Through our network, we offer patients convenient locations for their diagnostic laboratory services and efficient service. With over 5000+ diagnostic tests and related healthcare tests and services offered, we believe we are capable of performing substantially all of the diagnostic healthcare tests and services currently prescribed by physicians in India. By delivering most accurate reports over the years, Dr. Lal PathLabs has earned the reputation of being amongst the most trustworthy and reliable pathology labs in India.

</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            </div>
          </div>
        </div>
      </div>

      <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Book Home Collection</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
            </div>
            <div>
              <h2>Online Access to Reports</h2>
              <!-- <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <a href="#" class="btn btn-primary">
                Primary button
              </a> -->
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
            </div>
            <div>
              <h2>Convenient & Time Saving.</h2>
              <!-- <p></p>
              <a href="#" class="btn btn-primary">
                See more
              </a> -->
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
            </div>
            <div>
              <h2>Home Collection Policy</h2>
              <p>If the total value of all the tests/packages in the cart is Equal to or More than Rs. 2000/-, then there will be no home collection charges levied</p>
              <a href="#" class="btn btn-primary">
                See More
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="py-3 my-4">
      <div class="container">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item">
            <a href="<?php echo $site_url; ?>/pages/about.php" class="nav-link px-2 text-muted">About us</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $site_url; ?>/pages/contact.php" class="nav-link px-2 text-muted">Contact us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-muted">License</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $site_url; ?>/pages/privacy.php" class="nav-link px-2 text-muted">Privacy & Policy</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $site_url; ?>/pages/term.php" class="nav-link px-2 text-muted">Terms & Condtion</a>
          </li>
        </ul>
        <p class="text-center text-muted">© 2022 Pathocare, Inc</p>
      </div>
    </footer>
  </body>
</html>
