<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/yourcode.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="../Apartment/img/apartment.png">

    <style>
        @font-face {
            font-family: 'quarkbold';
            src: url('../Apartment/font/quark-bold-webfont.woff2') format('woff2'),
                url('../Apartment/font/quark-bold-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'quarklight';
            src: url('../Apartment/font/quark-light-webfont.woff2') format('woff2'),
                url('../Apartment/font/quark-light-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;

        }

        body {
            font-family: 'quarkbold', 'quarkbold', quark;
            /* background-color: #E6E6FA; */
            background-image: url("../Apartment/img/pexels-expect-best-323705.jpg");
            height: 20px;
            background-position: center;
        }
    </style>

    <title>TeeApartment</title>
</head>

<body>

    <br><br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <p></p>
                <h1>
                    <center><b></b> TeeApartment </center>
                </h1>
                <p></p>
                <center><a href="home.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">HOME
                        PAGE</a></center>
                <?php include('counter.php'); ?>
            </div>
        </div>
    </div>

</body>

<?php include('footer.html'); ?>