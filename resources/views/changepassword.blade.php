<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SportSnooze | Change Password</title>

  <!-- favicon -->
  <link rel=icon href="assets/img/favicon.png" sizes="20x20" type="image/png">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="assets/css/vendor.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <style>
    body {
      font-family: "Lato", sans-serif;
      background-image: url('assets/img/football2.jpg');
      background-size: cover;
      background-position: center;
      min-height: 100%;
    }

    a,
    [type="submit"] {
      transition: all .25s ease-in;
    }

    .signup__container {
      position: absolute;
      top: 50%;
      right: 0;
      left: 0;
      margin-right: auto;
      margin-left: auto;
      transform: translateY(-50%);
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      width: remy(800px);
      height: remy(480px);
      border-radius: remy(3px);
      box-shadow: 0px remy(3px) remy(7px) rgba(0, 0, 0, .25);
    }

    .signup__overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #2B2B2B;

    }

    .container__child {
      width: 50%;
      height: 100%;
      color: #fff;
    }

    .signup__thumbnail {
      position: relative;
      padding: 2rem;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      background-color: #2B2B2B;
      background-repeat: no-repeat;
      background-position: top center;
      background-size: cover;
    }

    .thumbnail__content,
    .thumbnail__links {
      position: justify;
      z-index: 2;
    }

    .thumbnail__content {
      align-self: center;
    }

    h1,
    h2 {
      font-weight: 300;
      color: rgba(255, 255, 255, 1);
      padding: 50px;
      margin: auto;
      text-align: left;
    }

    .heading--primary {
      font-size: 50px;
    }

    .heading--secondary {
      font-size: 20px;
    }

    .thumbnail__links {
      align-self: flex-end;
      width: 100%;
    }

    .thumbnail__links a {
      font-size: 1rem;
      color: darkgray;
    }

    .signup__form {
      padding: 2.5rem;
      background: #2B2B2B;
      ;
    }

    label {
      font-size: .85rem;
      text-transform: uppercase;
      color: darkgray;
    }

    .form-control {
      background-color: transparent;
      border-top: 0;
      border-right: 0;
      border-left: 0;
      border-radius: 0;
    }

    [type="text"] {
      color: #111;
    }

    [type="password"] {
      color: #111;
    }

    .btn--form {
      font-size: 20px;
      font-weight: 600;
      text-transform: uppercase;
      color: black;
      background: white;
      border-radius: remy(35px);
      text-align: left;
    }

    .signup__link {
      font-size: .8rem;
      font-weight: 600;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <div class="w3-bar w3-black w3-card ">

    <a class="w3-bar-item w3-padding-large " style="font-size:25px;">SPORTSnooze! </a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Home</a>
    <a href="livescore-list" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">LIVE Score</a>
    <a href="highlights-list" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Highlights</a>
    <a href="news-list" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">News</a>
    <a href="myaccount-list" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">My Account</a>

  </div>
  <!-- Navbar -->

  <br>
  <div class="container">
    <div class="row">
      <div class="container__child signup__thumbnail">
        <div class="thumbnail__content text-center">
          <h1>Change Your Password</h1>
          <ul class="list-inline">
            <li>
              <input class="btn btn--form" type="submit" value="CONFIRM" />
            </li>
          </ul>
        </div>
      </div>
      <div class="container__child signup__form">
        <br>
        <form action="#" style="padding-bottom: 29px;">
          <div class="form-group">
            <label for="password">New Password</label>
            <input class="form-control" type="password" name="password" id="password" required />
          </div>
          <div class="form-group">
            <label for="phoneNumber">Repeat Password</label>
            <input class="form-control" type="password" name="password" id="password" required />
          </div>
          <div class="thumbnail__links">
            <ul style="list-style-type:none; text-align: right; padding: 21px;">
              <a href="#" style="margin: 15px;" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="#" style="margin: 15px;" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="#" style="margin: 15px;" target="_blank"><i class="fa fa-twitter"></i></a>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>