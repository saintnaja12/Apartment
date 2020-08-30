<?php ob_start(); //คำสั่งจอง buffer ?>

<?php include('header.html'); ?>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <a class="navbar-brand" href="admin.php"><img src="../Apartment/img/apartment.png" alt="" width="40"
                height="40">TeeApartment</a> -->

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="insert_admin.php">Insert</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="load_room_admin.php">Edit-Delete</a>
                </li>
            </ul>

            <?php // include "login_form.php" ?>

            <!-- <form class="form-inline my-2 my-lg-0" method="post" action="admin.php" target="_blank"> -->
                <!-- <input class="form-control mr-sm-2" type="text" placeholder="Username" aria-label="Username"> -->
                <!-- <input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password"> -->
                <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php">Logout</a>
            <!-- </form> -->
        </div>
    </nav>

    <p></p>

    <div class="container">

        <center>
            <h4>ADMIN</h4>
        </center>

        <div class="row">
            <div class="col-4">
                <a class="nav-link" href="insert_admin.php">Insert</a>
            </div>
            <div class="col-4">
                <a class="nav-link" href="load_room_admin.php">Edit-Delete</a>
            </div>
            <div class="col-4">
                <?php 
                session_start(); 
                include_once "insert.php";    
                ?>
            </div>
        </div>

    </div>

</body>

<?php include('footer.html'); 
    ob_end_flush();

?>