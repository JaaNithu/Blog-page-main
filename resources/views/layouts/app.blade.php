
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: 'Mind Blog'}}</title>
    <meta name="author" content="Mind Blog">
    <meta name="description" content="{{ $metaDescription }}">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">


    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>

<body class="bg-white font-family-karla">
    <!-- Text Header -->

    <!--connect-->
<?php
//include('includes/connect.php');
?>

<style>
.navbar {
            background-color: #0a4275;
            width: 100%;
            height: 100px;
        }

        .navbar ul{
            list-style: none;
            background-color: #0a4275;
            padding: 1;
            margin-left: 15px;
            text-align: center;
        }

        ul li{
            display: inline-block;
            text-align: center;
            margin: 0;
            margin-top: 1%;
            position: relative;
            padding: 0;
        }

        ul li a{
            padding: 15px;
        }

        .nav-link {
            color: white;
        }

        .container-social-media a{
            float: right;
            margin-right: 2%;
            color: #fff;
            margin-top: -2%;
        }

        .container-social-media:hover {
            size: 10px;
        }

        .logo {
            float: left;
            margin: 3%;
            height: 75px;
            width: auto;
        }

        .collapse {
            background-color: #0a4275;
            padding: 25;
        }

        footer {
            background-color: #0a4275;
            bottom: 0;
            width: 100%;
        }
</style>



<!-- ========================= NAVBAR ========================= -->

<nav class="navbar navbar-expand-lg shadow-lg">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img src="assets/media/logo.png" alt="logo" class="logo m-1">
        </a>

        <div class="col-md-1"></div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link m-1" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-1" href="About.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-1" href="http://localhost/">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-1" href="Appoinment.php">APPOINTMENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-1" href="Contact.php">CONTACT</a>
                </li>
            </ul>

            <div class="column col-md-2"></div>

            <div class="container-social-media m-0">
                <a class="soc" style="color: #3b5998;" href="#!" role="button">
                    <i class="fab fa-facebook-f fa-lg m-2"></i>
                </a>

                <a class="soc" style="color: #55acee;" href="#!" role="button">
                    <i class="fab fa-twitter fa-lg m-2"></i>
                </a>

                <a class="soc" style="color: #25d366;" href="#!" role="button">
                    <i class="fab fa-whatsapp fa-lg m-2"></i>
                </a>

                <a class="soc" style="color: #ac2bac;" href="#!" role="button">
                    <i class="fab fa-instagram fa-lg m-2"></i>
                </a>
            </div>


        </div>

    </div>

    </nav>

    <div class="container mx-auto flex flex-wrap py-6">

        {{$slot}}

    </div>


<!--connect-->
<?php
    //include('includes/connect.php');
?>

<!-- ========================= FOOTER ========================= -->

<section class="">

    <footer class="text-white">
    <!--
        <div class="container p-2">
            <section class="footer-links">
                <div class="row">
                    <div class="logo col-md-3">
                        <a class="footer-brand" href="index.php">
                            <img src="assets/media/logo.png" alt="logo" class="logo">
                        </a>
                    </div>
                    <div class="col-md-1 pt-1"></div>
                    <div class="col-md-6 pt-1">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, est!</p>
                    </div>
                </div>
            </section>
        </div>
    -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="#">Renew Minds</a>
        </div>

    </footer>

</section>

</body>
</html>
