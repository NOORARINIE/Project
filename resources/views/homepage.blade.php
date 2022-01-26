<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif;font-weight: 1000}
body, html {height: 100%}
.bgimg {
  background-image: url('assets/ball.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
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

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    SportSnooze!
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">WELCOME TO SPORTSNOOZE!</h1>
    
    
    <a href="livescore"><button class="button1">LiveScore</button></a>&nbsp;
    <a href="highlightspage"><button class="button1">Highlights</button></a>&nbsp;
    <a href="newspage"><button class="button1">News</button></a>&nbsp;
  </div>
 
</div>

</body>
</html>