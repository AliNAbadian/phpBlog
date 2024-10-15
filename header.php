<!DOCTYPE html>
<html lang="en" dir='rtl'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- jQuery library -->
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Lalezar', sans-serif;">
    <div class="container">
        <div class="row  bg-warning">
            <div class="col-md-4">
                <img src="img/Logo.jpg" class="float-right">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <img src="img/ads.gif" class="float-left">
            </div>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">خانه</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">فرهنگی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">تاریخی</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        کامپیوتر
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">طراحی وب</a>
                        <a class="dropdown-item" href="#">برنامه نویسی</a>
                        <a class="dropdown-item" href="#">گرافیک</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</body>