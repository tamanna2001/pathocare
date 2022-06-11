<?php
    //Add database connection
    require_once('connect.php');
?>
<?php
//Check only non-login users and redirect them to login page.
if(isset($_COOKIE['user_id'])){
  //Decode login cookie
  $user_id=$_COOKIE['user_id'];
  $user_id=convert_uudecode($user_id);
  //Get Data from SQL
  $sql="SELECT * FROM users WHERE id='".$user_id."'";
  $result=$connect->query($sql);
  $row=$result->fetch_assoc();
  //Check cookie id with database id with === operator
  if ($user_id===$row['id']) {
      header("Location: pages/profile.php");
      exit();
  }
}

//Check Login Information
if (isset($_REQUEST['login'])) {
  if (($_SERVER['REQUEST_METHOD']=='POST')){
  $phone_number=$connect->real_escape_string($_REQUEST['phone_number']);
  $password=$connect->real_escape_string($_REQUEST['password']);
  $sql="SELECT id,password,phone_number FROM users WHERE (password='$password' AND phone_number='$phone_number') LIMIT 1";
  $result=$connect->query($sql);
  $row=$result->fetch_assoc();
  if(isset($row['id'])){
    $user_id=$row['id'];
    //Encode Cookie Value
    $user_id=convert_uuencode($user_id);
}
  //Check Row Exist or Not
      if ($result->num_rows==1) {
          //Add cookies
          $cookie_time=time()+60*60*24*365;
          setcookie("user_id",$user_id,$cookie_time,"/");
          header("Location: pages/profile.php");
          exit();
      }
      else{
          echo "<script>alert('Invalid Phone Number or password!');</script>";
      }
  }
  else{
      echo "<script>alert('Wrong Login Method!');</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
  </head>
  <body class="text-center">
  <img src="img/Doctors.jpeg" height="100%" >
    <main class="form-signin w-100 m-auto">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <a href="<?php echo $site_url; ?>"><img
          class="mb-4"
          src="img/icon.jpg"
          alt="logo"
          width="75"
          height="75"
        /></a>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
          <input
            type="number"
            name="phone_number"
            class="form-control"
            id="floatingInput"
            placeholder="Phone"
            required
          />
          <label for="floatingInput">Phone Number</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            name="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
            required
          />
          <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">
          Sign in
        </button>
        <br>
        <br>
        <a type="button" href="<?php echo $site_url; ?>/register.php" class="w-100 btn btn-lg btn-outline-secondary">Register</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2022 Pathocare</p>
      </form>
    </main>
  </body>
</html>
