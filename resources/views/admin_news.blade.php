<!DOCTYPE html>
<html lang="en">
<title>Admin | Add News</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/css/vendor.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<style>
    body {
        font-family: "Lato", sans-serif
    }

    .bgimg {
        background-image: url('assets/img/football2.jpg');
        background-size: cover;
        background-position: center;
        min-height: 100%;
    }
</style>


<body>
    <!-- Navbar -->
    <div class="w3-top bgimg">
        <div class="w3-bar w3-black w3-card ">
        <a class="w3-bar-item w3-padding-large " style="font-size:25px;">SPORTSnooze! </a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Home</a>
            <a href="livescore-list" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">LIVE Score</a>
            <a href="highlights-list" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">Highlights</a>
            <a href="news-list" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">News</a>
            <a href="myaccount-list" class="w3-bar-item w3-button w3-padding-large " style="font-size:25px;">My Account</a>

            <a class="w3-padding-large w3-right" style="font-size:25px;">Admin</a>
        </div>
        <br><br>
        <br><br>
        <!-- LIVE Score -->
        <div class="container w3-dark-grey " style="padding:20px;">
            <div class="container w3-black" style="padding:20px;">
                <h5>News Management
                    <a class="btn btn-primary" style="float: right;" href="{{route('news.list')}}">List News</a>
                </h5>
                <div class="w3-display-container w3-dark-grey" style="height:auto;">
                    <div>
                        <table class="table">
                            <thead>
                                <tr class="w3-padding w3-card-4 w3-red">
                                    <th>News</th>
                                    <th>Title</th>
                                    <th>Picture</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form class="form" action="{{route('save.news')}}" method="POST">
                                    @if(Session::has('success'))
                                    <span class="alert alert-success"> {{Session::get('success')}}</span>
                                    @endif
                                    @csrf
                                    <tr>
                                        <td>
                                            <input class="form-control" type="text" name="news" value="" />
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="title" value="" />
                                        </td>
                                        <td>
                                            <input class="form-control" type="file" name="picture" value="" />
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button class=" fa fa-check" type="submit" style="background-color: Green; color: white; margin: 5px"></button>
                                            </div>
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>