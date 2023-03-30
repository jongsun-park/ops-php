<?php 
try{
  include_once(__DIR__ . "/includes/db.php");
  $result = $pdo->query("SELECT * FROM admin")->fetchAll();
}catch (PDOException $e) {
  echo "<pre>" . var_dump($e) . "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operations</title>
</head>
<body>
  <h1><?= "Operations" ?><?= date('l jS \of F Y h:i:s A') ?></h1>
  <h2>Admin Table</h2>
  <?php foreach($result as $admin): ?>
    <li><?= $admin['name'] ?></li>
  <?php endforeach; ?>
</body>
</html>