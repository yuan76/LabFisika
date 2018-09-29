<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Asisten</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../css/blue.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body" style="background-color:#003dae; border-radius:15px;">
  <div class="login-logo" style="background-color:#6ae5cb; border-radius:10px;">
    <font face="Century Gothic, Chiller, Comic Sans MS"> Login Asisten </font>
  </div>
    <form method="post" action="awal.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="username" name="user" id="user" required>
        <i class="fa fa-user form-control-feedback"></i>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" required>
        <i class="fa fa-lock form-control-feedback"></i>
      </div>
      <div class="row">
        <div class="col-md-4">
          <button type="submit" class="btn btn-warning btn-lg btn-block"> Login </button>
        </div>
      </div>
    </form>
    <a href="../index.php">Kembali</a><br>
  </div>
</div>

<script src="../css/jquery-2.2.3.min.js"></script>
<script src="../css/bootstrap.min.js"></script>
</body>
</html>
