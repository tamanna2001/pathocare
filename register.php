<?php
    //Add database connection
    require_once('auth.php');
?>
  <?php
if(isset($_REQUEST['submit'])){
  if(($_REQUEST['name'] == "") || ($_REQUEST['password'] == "")|| ($_REQUEST['phone_number'] == "")|| ($_REQUEST['gender'] == "")|| ($_REQUEST['age'] == "")|| ($_REQUEST['address'] == "")){
    echo "<script>alert('All fields are required to add data!');</script>";
  }
  else{
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $phone_number = $_REQUEST['phone_number'];
    $gender = $_REQUEST['gender'];
    $age = $_REQUEST['age'];
    $address = $_REQUEST['address'];
    $sql = "INSERT INTO users (name,password,phone_number,gender,age,address) VALUES ('$name','$password','$phone_number','$gender','$age','$address')";
  }
  if($connect->query($sql)==TRUE){
    echo "<script>alert('Registration successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to register!');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
  </head>
  <body class="text-center">
    <main class="form-signin w-100 m-auto">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <a href="<?php echo $site_url; ?>"><img
          class="mb-4"
          src="img/icon.jpg"
          alt="logo"
          width="75"
          height="75"
        /></a>
        <h1 class="h3 mb-3 fw-normal">Register Now</h1>

        <div class="form-floating">
          <input
            type="number"
            name="phone_number"
            class="form-control"
            id="floatingInput"
            placeholder="+91"
            required
          />
          <label for="floatingInput">Phone Number</label>
        </div>
        <div class="form-floating">
          <input
          type="text"
          name="name"
            class="form-control"
            id="floatingPassword"
            placeholder="Name"
            required
          />
          <label for="floatingPassword">Name</label>
        </div>
        <div class="form-floating">
          <input
            type="number"
            name="age"
            class="form-control"
            id="floatingPassword"
            placeholder="Name"
            required
          />
          <label for="floatingPassword">Age</label>
        </div>
        <div class="form-floating">
          <select class="form-select" name="gender" aria-label="Default select example">
            <option selected>Select Gender</option>
            <option value="0">Male</option>
            <option value="1">Female</option>
            <option value="3">Others</option>
          </select>
        </div>
        <div class="form-floating">
          <input
            type="text"
            name="address"
            class="form-control"
            id="floatingPassword"
            placeholder="Address"
            required
          />
          <label for="floatingPassword">Address</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            name="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Address"
            required
          />
          <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">
          Register
        </button>
         <br>
         <br>
        <a type="button" href="<?php echo $site_url; ?>/login.php" class="w-100 btn btn-lg btn-outline-secondary">Sign in</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2022 Pathocare</p>
      </form>
    </main>
  </body>
</html>
