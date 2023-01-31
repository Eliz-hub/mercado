<?php include('connect.php'); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Login - Administrador</title>
  <link href="css/signin.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="text-center" style="background-color: darkgray;">

  <main class="form-signin w-100 m-auto bg-dark">
    <form action="" method="POST" class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-white">Login</h1>
      <br>


      <div class="phptxt">
        <?php
        if (isset($_POST['id']) || isset($_POST['senha'])) {

          if (strlen($_POST['id']) == 0) {
          } else if (strlen($_POST['senha']) == 0) {
          } else {
            $id = $mysqli->real_escape_string($_POST['id']);
            $pass = $mysqli->real_escape_string($_POST['senha']);
            $pass_crypt = md5($pass);

            $sql_code = "SELECT * FROM administrador WHERE id = '$id' AND pass = '$pass_crypt'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execucao do codigo SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if ($quantidade == 1) {
              $admin = $sql_query->fetch_assoc();

              if (!isset($_SESSION)) {
                session_start();
              }

              $_SESSION['id'] = $admin['id'];

              header("Location: admin/homepage_admin.php");
            } else {
              echo "<p style=\"color: red; font-size: 12px; text-align:center;\">ID ou Password incorretos.</p>";
            }
          }
        }
        ?>
      </div>


      <br>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="id" placeholder="name@example.com" required>
        <label for="floatingInput">ID Admin</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>
      <br><br>
      <button class="w-50 btn btn-lg btn-primary" type="submit">Entrar</button>
      <br><br><br>
      <p class="mt-5 mb-3 text-muted">&copy;2022 - ZEON</p>
    </form>
    
  </main>

  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>