<!DOCTYPE html>
<html lang="en">
<title>SportSnooze | LIVEScore</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/css/vendor.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
  body {
    font-family: "Lato", sans-serif;

  }

  

  .bgimg {
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


<body>

  <!-- Navbar -->
  <div class="w3-top bgimg">
    <div class="w3-bar w3-black w3-card ">

    <a class="w3-bar-item w3-padding-large " style="font-size:25px;">SPORTSnooze! </a>
      <a href="/" style="padding: 8px; float: right"><button class="button1">Logout</button></a>
      <a href="homepage" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Home</a>
      <a href="livescore" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">LIVE Score</a>
      <a href="highlightspage" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Highlights</a>
      <a href="newspage" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">News</a>
      <a href="profile" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">My Account</a>
      
    </div>
    <br><br>
    
    
    <!-- LIVE Score -->
    <div class="container w3-dark-grey " style="padding:20px; height:500px;width:1000px">
      <div class="container w3-black" style="padding:20px; ">
      <h5>Today Matches</h5>
      <div class="w3-right-align ">Live Football Scores, Fixtures & Results</div>
      <div class="w3-display-container w3-dark-grey" style="height:auto;" >

      <center> <iframe style="height:500px;width:1000px"  src="https://www.livexscores.com/"> </iframe></center> 



      </div>
    </div>  
  </div>

  


</body>

</html>