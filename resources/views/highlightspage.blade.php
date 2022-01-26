<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SportSnooze | Highlights</title>

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
        .button1 {
            background-color: #000000;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        /* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="w3-top bgimg">
        <div class="w3-bar w3-black w3-card ">
        <a href="/" style="padding: 8px; float: right"><button class="button1">Logout</button></a>  
      <a class="w3-bar-item w3-padding-large " style="font-size:25px;">SPORTSnooze! </a>
      <a href="homepage" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Home</a>
      <a href="livescore" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">LIVE Score</a>
      <a href="highlightspage" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Highlights</a>
      <a href="newspage" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">News</a>
      <a href="profile" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">My Account</a>

            
        </div>
    </div>
    <br><br>
    <br><br>
    <div class="container w3-black">
        <div class="row">
        @foreach($highlights as $highlight)
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <iframe width="560" height="315" src={{$highlight->url}} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h6 class="title"><a href="#">{{$highlight->longcaption}}</a></h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i> {{$highlight->posttime}} ago 
                                <div style='float: right'{!! QrCode::size(40)->generate($highlight->url) !!}</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    </div>
</div>

</body>

</html>