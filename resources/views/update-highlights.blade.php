<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SportSnooze | Admin</title>

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
    table {
      border-collapse: collapse;
      width: 100%;
      padding: 8px;
    }

    th, td {
      text-align: left;
      padding: 10px;

    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
      background-color: Gray;
      color: black;
    }

    .button1 {
                background-color: #000000;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;

    }

    body {
            font-family: "Lato", sans-serif;
            background-image: url('assets/grey.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100%;
        }

</style>
</head>



<body>
   <!-- Navbar -->
   <div class="w3-bar w3-black w3-card ">
   <a href="/" style="padding: 8px; float: right"><button class="button1">Logout</button></a>
<a class="w3-bar-item w3-padding-large" style="font-size:25px; ">Highlights Database </a>


</div>    
<!-- Navbar -->
<br><br><br>
<div class="container">
    <table>
    
            <th>Highlights Link</th>
            <th>Caption</th>
            <th>Posted Time</th>
            <th>Edit / Delete</th>
            

      </tr>
        @foreach($highlights as $highlight)
        <tr>
            <td>{{$highlight->url}}</td>
            <td style="float: left">{{$highlight->longcaption}}</td>
            <td>{{$highlight->posttime}}</td>
            
            <td>
                <a href="/edit-highlights/{{$highlight->id}}"><button class="button1">Edit</button></a>
                <a href="/delete-highlights/{{$highlight->id}}"><button class="button1">Delete</button></a>
            </td>
        </tr>
        @endforeach
    </table>
    <br><br><br>
    <a href="add-highlights" style="padding: 8px"><button class="button1">Back</button></a>   
  </div>
  </body>
  </html>