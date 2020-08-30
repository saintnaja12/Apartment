<?php include('header.html'); ?>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="home.php"><img src="../Apartment/img/apartment.png" alt="" width="40"
                height="40">TeeApartment</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="room.php">Room & Price <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="guest.php">Guest book</a>
                </li>

    </ul>

    <?php // include "login_form.php" ?>

    <form class="form-inline my-2 my-lg-0" method="post" action="admin.php" target="_blank">
      <input class="form-control mr-sm-2" type="text" placeholder="Username" aria-label="Username" name="user" id="user">
      <input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password" name="password" id="password">
      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Login" name="send">
    </form>
  </div>
</nav>

    <p></p>

<div class="container">

<?php include "date.php" ?>

    <div class="row">
            <div class="col-sm-4">
                <a target="_blank" href="../Apartment/img/pexels-george-becker-129494.jpg">
                    <div class="text-center">
                        <img src="../Apartment/img/pexels-george-becker-129494.jpg" class="rounded" alt="Footage 1"
                            width="250" height="250">
                    </a>
                    <div class="desc">Footage 1</div>
                </div>
            </div>

        <div class="col-sm-4">
            <a target="_blank" href="../Apartment/img/pexels-pixabay-259950.jpg">
                <div class="text-center">
                    <img src="../Apartment/img/pexels-pixabay-259950.jpg" class="rounded" alt="Footage 1" width="250"
                        height="250">
                </a>
                <div class="desc">Footage 2</div>
            </div>
        </div>

        <div class="col-sm-4">
            <a target="_blank" href="../Apartment/img/pexels-sevenstorm-juhaszimrus-439391.jpg">
                <div class="text-center">
                    <img src="../Apartment/img/pexels-sevenstorm-juhaszimrus-439391.jpg" class="rounded" alt="Footage 1"
                        width="250" height="250">
                </a>
                <div class="desc">Footage 3</div>
            </div>
        </div>

        <div class="col-sm-4">
            <a target="_blank" href="../Apartment/img/pexels-anthony-gideon-1446378.jpg">
                <div class="text-center">
                    <img src="../Apartment/img/pexels-anthony-gideon-1446378.jpg" class="rounded" alt="Footage 1"
                        width="250" height="250">
                 </a>
                <div class="desc">Footage 4</div>
            </div>
        </div>

        <div class="col-sm-4">
            <a target="_blank" href="../Apartment/img/pexels-pixabay-275484.jpg">
                <div class="text-center">
                    <img src="../Apartment/img/pexels-pixabay-275484.jpg" class="rounded" alt="Footage 1"
                        width="250" height="250">
                 </a>
                <div class="desc">Footage 5</div>
            </div>
        </div>

        <div class="col-sm-4">
            <a target="_blank" href="../Apartment/img/pexels-nicolae-casîr-205078.jpg">
                <div class="text-center">
                    <img src="../Apartment/img/pexels-nicolae-casîr-205078.jpg" class="rounded" alt="Footage 1"
                        width="250" height="250">
                 </a>
                <div class="desc">Footage 4</div>
            </div>
        </div>

    </div>
</div>

</body>

<?php include('footer.html'); ?>