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
      <h1 class="form-title">Sign up</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="input-wrapper">
          <label for="username">Username</label>
          <input type="text" name="username">
        </div>
        <div class="input-wrapper">
          <label for="fname">Frist name</label>
          <input type="text" name="fname">
        </div>
        <div class="input-wrapper">
          <label for="lname">Last Name</label>
          <input type="text" name="lname">
        </div>
        <div class="input-wrapper">
          <label for="email">Email</label>
          <input type="email" name="email">
        </div>
        <div class="input-wrapper">
          <label for="password">Password</label>
          <input type="password" name="password">
        </div>
        <div class="input-wrapper">
          <label for="password-confirm">Password Confirm</label>
          <input type="password" name="password-confirm">
        </div>
        <div class="input-wrapper">
          <label for="profile">Profile Image</label>
          <input type="file" name="profile" accept="image/jpeg, image/png">
        </div>
        <div class="buttons">
          <input type="submit" class="button is-primary" value="Login">
          <input type="reset" class="button is-secondary" value="Reset">
        </div>
        <p>Or <a href="login.php">Log in</a></p>  
      </form>
    </div>
  </main>
  <!-- Site Footer -->
  <?php include __DIR__ . "/templates/footer.php"; ?>
</body>
</html>