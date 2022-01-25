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
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="w3-top bgimg">
        <div class="w3-bar w3-black w3-card ">

            <<a class="w3-bar-item w3-padding-large " style="font-size:25px;">SPORTSnooze! </a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Home</a>
                <a href="livescore" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">LIVE Score</a>
                <a href="highlights" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Highlights</a>
                <a href="news" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">News</a>
                <a href="myaccount" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">My Account</a>

                <a href="javascript:void(0)" class="w3-padding-large w3-right" style="font-size:25px;"><i class="fa fa-search"></i></a>
        </div>
    </div>
    <br><br>
    <br><br>
    <div class="container w3-black">
        <div class="row"
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <a class="tag-base tag-orange" href="#">{{$highlight->highlights}}</a>
                    </div>
                    <div>
                        <h6 class="title">{{$highlight->title}}</h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i>{{$highlight->times}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="assets/img/football3.jpg" alt="img">
                        <a class="tag-base tag-orange" href="#">SMITH-ROWE</a>
                    </div>
                    <div>
                        <h6 class="title"><a href="#">"I'm sure if the result isn't going Arsenal way, Smith..."</a>
                        </h6>

                        <ul style="list-style-type:none;">
                            <li><i class="fa fa-clock-o"></i> 45 minutes ago</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="assets/img/football3.jpg" alt="img">
                        <a class="tag-base tag-blue" href="#">HAALAND</a>
                    </div>
                    <div>
                        <h6 class="title"><a href="#">Whoever gets Haaland will CONQUER the Champions...</a>
                        </h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i> 53 minutes ago</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="assets/img/football3.jpg" alt="img">
                        <a class="tag-base tag-orange" href="#">TUCHEL</a>
                    </div>
                    <div>
                        <h6 class="title"><a href="#">Thomas Tuchel made it clear that he has NOTHING again...</a></h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i> 1 hour ago</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="assets/img/football3.jpg" alt="img">
                        <a class="tag-base tag-orange" href="#">GUNNERS</a>
                    </div>
                    <div>
                        <h6 class="title"><a href="#">"They can BEAT any team with this performance"-Ronaldo</a></h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i> 1 hour ago</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="assets/img/football3.jpg" alt="img">
                        <a class="tag-base tag-orange" href="#">FODEN</a>
                    </div>
                    <div>
                        <h6 class="title"><a href="#">EPL Highlights: Chelsea 2-2 Liverpool | Astro SuperSport</a></h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i> 1 day ago</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="assets/img/football3.jpg" alt="img">
                        <a class="tag-base tag-yellow" href="#">YELLOW CARD</a>
                    </div>
                    <div>
                        <h6 class="title"><a href="#">"It's not EASY to come here without Klopp"-Pep Lijnde</a></h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i> 23 hours ago</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="assets/img/football3.jpg" alt="img">
                        <a class="tag-base tag-blue" href="#">CITYZENS</a>
                    </div>
                    <div>
                        <h6 class="title"><a href="#">Conor Coady speaks about Bruno Lage, culture at...</a></h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i> 1 hour ago</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="assets/img/football3.jpg" alt="img">
                        <a class="tag-base tag-orange" href="#">IN FAVOUR</a>
                    </div>
                    <div>
                        <h6 class="title"><a href="#">"The referee was favouring Man City more over Arsenal..."</a></h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i> 1 day ago</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="assets/img/football3.jpg" alt="img">
                        <a class="tag-base tag-orange" href="#">LUKAKU</a>
                    </div>
                    <div>
                        <h6 class="title"><a href="#">Carlton Cole DEFENDS ROmelu Lukaku on the latter...</a></h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i> 1 day ago</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="assets/img/football3.jpg" alt="img">
                        <a class="tag-base tag-red" href="#">RED CARD</a>
                    </div>
                    <div>
                        <h6 class="title"><a href="#">"The red card was a MISTAKE for them"-Rodri's post...</a></h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i> 23 hours ago</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-post-wrap style-white">
                    <div class="thumb">
                        <img src="assets/img/football3.jpg" alt="img">
                        <a class="tag-base tag-orange" href="#">TUCHEL</a>
                    </div>
                    <div>
                        <h6 class="title"><a href="#">EPL Highlights: Everton 2-3 Brighton & Hove Albion...</a></h6>
                        <div>
                            <ul style="list-style-type:none;">
                                <li><i class="fa fa-clock-o"></i> 1 hour ago</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    </div>
    </div>

</body>

</html>