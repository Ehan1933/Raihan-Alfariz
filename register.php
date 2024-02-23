<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Website</b>Ehan</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan Registrasi</p>

      <form action="proses_register.php" method="post">
		<div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class=""></span>
            </div>
          </div>
        </div>
		<div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class=""></span>
            </div>
          </div>
        </div>
		<!--<div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class=""></span>
            </div>
          </div>
        </div>-->
		<div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class=""></span>
            </div>
          </div>
        </div>
		<div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama Lengkap" name="NamaLengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class=""></span>
            </div>
          </div>
        </div>
		<div class="input-group mb-3">
		  <textarea class="form-control" rows="3" placeholder="Alamat" name="Alamat"></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class=""></span>
            </div>
          </div>
        </div>
		<div class="input-group mb-3">
		<button type="submit" class="btn btn-block btn-primary">
          <i class=""></i>Registrasi
        </button>
        </div>
      </form>
	  
	  <div class="social-auth-links text-center mb-3">     
		<a href="login.php" class="text-center">Login</a>
      </div>
    </div>
  </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
