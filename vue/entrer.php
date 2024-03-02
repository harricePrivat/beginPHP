<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/adminlte.min.css">
    <title>A et B</title>
</head>
<body class="hold-transition login-page">
<div class="login-logo">
    <b>Calcul A et B</b>
  </div>
<div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Entrer A et B</p>

      <form action="resultat.php" method="post">
        <div class="input-group mb-3">
          <input required type="number" name='a' class="form-control" placeholder="Entrez A">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input required type="number" name='b' class="form-control" placeholder="Entrer B">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary ">Calcul</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
  <script src="../assets/js/adminlte.js"></script>
</body>
</html>