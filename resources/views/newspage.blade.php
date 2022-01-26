<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SportSnooze | News</title>

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
    </style>
</head>

<body>
    <!-- Navbar -->
        <div class="w3-bar w3-black w3-card ">

      <a class="w3-bar-item w3-padding-large " style="font-size:25px;">SPORTSnooze! </a>
      <a href="/" style="padding: 8px; float: right"><button class="button1">Logout</button></a>
      <a href="homepage" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Home</a>
      <a href="livescore" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">LIVE Score</a>
      <a href="highlightspage" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Highlights</a>
      <a href="highlightspage" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">News</a>
      <a href="profile" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">My Account</a>

            
        </div>    
    <!-- Navbar -->



    <br>
    <div class="container w3-black">
    <h6 style="color: darkgray; font-family: Lato;">Football News</h6>
    <br>
   
    
    <div class="row">
    @foreach($news as $new)
    <div class="col-lg-6 col-sm-1">
        <div class="single-post-wrap">
            <div class="thumb">
            <iframe width="560" height="315" src={{$new->url}} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="btn-date"><i class="fa fa-camera"></i>{{$new->innercaption}}</p>
                
            </div>
            <div class="details">
                <p1>{{$new->date}}</p1>
                <h6 class="title"><a href="#">{{$new->outercaption}}</a></h6>
            </div>
            
                
        </div>
    </div>
    @endforeach
    </div>
   

</body>


</html>