<?php 
  $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:,400,500,600,700,800">
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/forms.css">
    <title>TUNFC - Telkom University National Futsal Competition</title>
</head>

<body>
    <!-- Menu For Mobile -->
    <div class="hide menublock" id="FullMenu">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-end mt-1">
                        <div class="col-2">
                            <div class="closebtn" id="CloseBtn">
                                <div class="closeMe"></div>
                            </div>
                        </div>
                    </div>
                    <h1 class="text-white menutitle text-right bold">TUNFC</h1>
                    <div class="menulink">
                        <nav class="nav flex-column text-right">
                            <a class="nav-link semibold" href="index.php">Beranda</a>
                            <a class="nav-link semibold" href="rekrut.php">Rekrutmen</a>
                        </nav>
                    </div>
                </div>
                <div class="col-11">
                    <div class="fixed-bottom mb-5">
                        <div class="d-flex justify-content-center">
                            <div>
                                <a class="nav-link" href="https://www.instagram.com/tunfc_bandung/" target="_blank"><img src="assets/ig.svg" alt="" width="24px" height="24px"></a>
                            </div>
                            <div>
                                <a class="nav-link" href="line://ti/p/@fyo5353y" target="_blank"><img src="assets/line.svg" alt="" width="24px" height="24px"></a>
                            </div>
                            <div>
                                <a class="nav-link" href="https://twitter.com/tunfc_bandung?lang=en" target="_blank"><img src="assets/tw.svg" alt="" width="24px" height="24px"></a>
                            </div>
                            <div>
                                <a class="nav-link" href="#"><img src="assets/fb.svg" alt="" width="24px" height="24px"></a>
                            </div>
                            <div>
                                <a class="nav-link" href="https://www.youtube.com/channel/UC0kcBQJYSRc0oG63XfbBShg" target="_blank"><img src="assets/yt.svg" alt="" height="28px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div id="BodyContent">
        <div class="row justify-content-center p-0 pt-4 mx-1">
            <div class="col-12 col-md-8 text-center p-0 m-0">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand ml-4 ml-md-0 extrabold" href="index.php">TUNFC</a>
                <div class=" navbar-toggler mr-4 mr-md-0 burgericon border-0" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <div class="row">
                            <div class="col">
                                <div id="ToMenu">
                                    <div id="rectangle1"></div>
                                    <div id="rectangle2"></div>
                                    <div id="rectangle3"></div>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link semibold <?php if ($activePage=="index") {echo "active"; } else  {echo "noactive";}?>" href="index.php">Beranda<span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link semibold <?php if ($activePage=="rekrut") {echo "active"; } else  {echo "noactive";}?>" href="rekrut.php">Rekrutmen</a>
                </div>
            </div>
            </nav>
        </div>
    </div>