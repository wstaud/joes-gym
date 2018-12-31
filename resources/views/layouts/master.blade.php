<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Joe's Gym San Antonio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    @yield('video')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="/resources/imgs/noTxtLogo-sm.png" width="46" height="40" alt="">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            @yield('navbar-selection')
            <ul class="nav navbar-nav ml-auto">
                <li>
                    <a href="https://www.instagram.com/joesgymsa/" class="nav-link"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/pages/Joes-Gym/120568157959066" class="nav-link"><i class="fab fa-facebook"></i></a>
                <li>
                    <a href="#" class="nav-link"><i class="fas fa-envelope-square"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-center">
                <img class="fitImg top-gap" src="/resources/imgs/logo.png" alt="Joe's Logo">
            </div>
            <div class="row justify-content-center text-center">
                <h2>3700 FREDERICKSBURG RD STE 111 <br>SAN ANTONIO TX 78201 <br>210-257-9287</h2>
            </div>
            <div class="row justify-content-center">
                    <button type="button" class="btn btn-outline-secondary">top</button>
            </div>
            <div class="row justify-content-center text-center">
                <p>© 2018 JOE'S GYM LLC | <span id="light">Site designed/created by <a href="http://github.com/wstaud">William Staud</a></span></p>
            </div>
        </div>
    </footer>

    <!-- JS loads -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>
</html>