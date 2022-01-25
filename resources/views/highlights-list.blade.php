<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Hightlights List</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

</head>

<body>
    @if(Session::has('highlight_delete'))
    <span class="alert alert-success"> {{Session::get('highlight_update')}}</span>
    @endif
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

                <h5>Highlights Display
                    <a class="btn btn-primary" style="float: right;" href="{{route('highlight.add')}}">Add Highlights</a>
                </h5>
                <div class="w3-display-container w3-dark-grey" style="height:auto;">
                    <div>
                        <table class="table">
                            <thead class="form">
                                <tr class="w3-padding w3-card-4 w3-red">
                                    <th>#</th>
                                    <th>Highlights</th>
                                    <th>Title</th>
                                    <th>Times</th>
                                    <th>Video Clip</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($highlights as $highlight)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$highlight->id}}</td>
                                    <td>{{$highlight->highlights}}</td>
                                    <td>{{$highlight->title}}</td>
                                    <td>{{$highlight->times}}</td>
                                    <td>{{$highlight->video}}</td>
                                    <td>
                                        <a class=" fa fa-edit" style="background-color: DodgerBlue; color: white; margin: 5px; padding: 5px" href="/edit-highlights/{{$highlight->id}}"></a>
                                        <a class=" fa fa-remove" style="background-color: red; color: white; margin: 5px; padding: 5px" href="/delete-highlights/{{$highlight->id}}"></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</body>

</html>