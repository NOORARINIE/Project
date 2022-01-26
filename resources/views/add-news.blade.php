<!DOCTYPE html>
<html lang="zxx">

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
        body {
            font-family: "Lato", sans-serif;
            background-image: url('assets/grey.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100%;
        }

        input[type=text], select, textarea {
            width: 100%; /* Full width */
            padding: 12px; /* Some padding */ 
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 6px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        /* Style the submit button with a specific background color etc */
        input[type=submit] {
            background-color: #000000;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* When moving the mouse over the submit button, add a darker green color */
        input[type=submit]:hover {
            
        }

        /* Add a background color and some padding around the form */
        .container {
            border-radius: 5px;
            background-color: grey;
            padding: 20px;
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
            <a href="/" style="padding: 8px; float: right"><button class="button1">Logout</button></a>
            <a class="w3-bar-item w3-padding-large " style="font-size:25px;">Quick Add News </a>

            
        </div>    
    <!-- Navbar -->

    <br><br>
    <div class="container">
    
    @if(Session::has('add_news'))
    <span>{{Session::get('add_news')}}</span>
    @endif
    
    <form action="{{route('save.news')}}" method="POST">
        @csrf
        URL <input type ="text" name="url" value="">
        <br>
        Inner Caption <input type ="text" name="innercaption" value="">
        <br>
        Outer Caption <input type ="text" name="outercaption" value="">
        <br>
        Date <input type ="text" name="date" value="">

        <br><br>
        <input type="submit" value="Submit"> 
        

    </form>
    
    <br>
    <a href="newspage"> <button class="button1">Preview</button></a>&nbsp;
    <a href="update-news"> <button class="button1">View Database</button></a>
    <a href="adminhome"> <button class="button1" style="float: right">Home</button></a>
    
    </div>

    

</body>

</html>

