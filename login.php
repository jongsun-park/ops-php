<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operations</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/authform.css">
</head>
<body>
  <!-- Site Header -->
  <?php include __DIR__ . "/templates/header.php"; ?>
  <main>
    <div class="form-wrapper card">
      <h1 class="form-title">Log in</h1>
      <form action="" method="POST">
        <div class="input-wrapper">
          <label for="username">Username</label>
          <input type="text" name="username">
        </div>
        <div class="input-wrapper">
          <label for="password">Password</label>
          <input type="password" name="password">
        </div>
        <p class="forget-pass"><a href="#">Forget password?</a></p>
        <input type="submit" class="button is-primary is-full" value="Login">
        <p>Or <a href="signup.php">Sign up</a></p>  
      </form>
    </div>
  </main>
  <!-- Site Footer -->
  <?php include __DIR__ . "/templates/footer.php"; ?>
</body>
</html>