<?php
session_start();
include('includes/config.php');

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $currentpassword = $_POST['cpass'];
  $newpassword = $_POST['npass'];

  //Query for searching data
  $sql = "SELECT Username FROM admin WHERE username=:Username and password=:Password";
  $query = $dbh->prepare($sql);
  $query->bindParam(':Username', $username, PDO::PARAM_STR);
  $query->bindParam(':Password', $currentpassword, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  if ($query->rowCount() > 0) {
    $con = "update admin set Password=:newpassword where username=:Username";
    $newpss = $dbh->prepare($con);
    $newpss->bindParam(':Username', $username, PDO::PARAM_STR);
    $newpss->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
    $newpss->execute();

    echo "<script>alert('You have successfully changed the password');</script>";
    echo "<script type='text/javascript'> document.location ='admin_main.php'; </script>";
  } else {
    echo "<script>alert('Email id or code is invalid. Please try again');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin | Change Password</title>

  <!-- ================= Favicon ================== -->
  <!-- Standard -->
  <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
  <!-- Retina iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
  <!-- Retina iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
  <!-- Standard iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
  <!-- Standard iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

  <!-- Styles -->
  <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
  <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/lib/helper.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  
  <style>
    body {
      font-family: "Lato", sans-serif;
      background-image: url('assets/img/football2.jpg');
      background-size: cover;
      background-position: center;
      min-height: 100%;
    }
  </style>
</head>

<body class="bg-primary">

  <div class="unix-login">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="login-content">
            <div class="login-logo">
              <a href="#"><span>SPORTSnooze!</span></a>
            </div>
            <div class="login-form">
              <h4>Reset Password</h4>
              <form action="admin_changepassword.blade.php" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label>Current Password</label>
                  <input type="password" class="form-control" name="cpass" placeholder="current password">
                </div>
                <div class="form-group">
                  <label>New Password</label>
                  <input type="password" class="form-control" name="npass" placeholder="new password">
                </div>
                <button type="submit" class="btn btn-primary btn-flat m-b-15" name="submit">Submit</button>
                <div class="register-link text-center">
                  <p>Back to <a href="admin_main"> Home</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>