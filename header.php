<link rel="shortcut icon" href="../img/icon.jpg" type="image/x-icon">
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery-3.6.0.min.js"></script>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h2><span style="color:blue">Patho</span>care</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $site_url; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $site_url; ?>/pages/categories.php">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $site_url; ?>/pages/services.php">Services</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            All Doctors
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
              $sql="SELECT * FROM categories ORDER BY name ASC";
              $result_cat=$connect->query($sql);
              while($row_cat=$result_cat->fetch_assoc()):
          ?>
            <li><a class="dropdown-item" href="<?php echo $site_url; ?>/pages/doctors.php?data=<?php echo $row_cat['id']; ?>"><?php echo $row_cat['name']; ?></a></li>
            <?php endwhile; ?>
          </ul>
        </li>
      </ul>
      <?php
      if($login!=1){
      ?>
      <a type="button" class="btn btn-primary px-4 me-md-2" href="<?php echo $site_url; ?>/login.php">Login</a>
      <a type="button" class="btn btn-outline-secondary px-4"  href="<?php echo $site_url; ?>/register.php">Register</a>
      <?php
      }else{
        if($id==1){
        ?>
        <a type="button" class="btn btn-success px-4 me-md-2" href="<?php echo $site_url; ?>/admin">Admin Panel</a>
        <?php } ?>
        <a type="button" class="btn btn-secondary px-4 me-md-2" href="<?php echo $site_url; ?>/pages/profile.php">My Account</a>
        <a type="button" class="btn btn-outline-danger px-4 me-md-2" href="<?php echo $site_url; ?>/logout.php">Logout</a>
      <?php
        }
      ?>
    </div>
  </div>
</nav>