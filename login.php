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
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
  </head>
  <body class="text-center">
    <main class="form-signin w-100 m-auto">
      <form>
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
            class="form-control"
            id="floatingInput"
            placeholder="Phone"
          />
          <label for="floatingInput">Phone Number</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
          />
          <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">
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