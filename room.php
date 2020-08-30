<?php include('header.html'); ?>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
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

        <center>
            <h4>Room Detail</h4>
        </center>

        <table id="table_id" class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Size</th>
                    <th scope="col">Price per day</th>
                    <th scope="col">Price per month</th>
                    <th scope="col">Picture</th>
                </tr>
            </thead>
            <tbody>

            <?php 
            
            $link = mysqli_connect("localhost", "root");
            mysqli_set_charset($link,'utf8');
            mysqli_query($link, "Use apartment;");

            $sql = "select * from room";

            $result = mysqli_query($link,$sql);
            while ($dbarr = mysqli_fetch_array($result)){

            ?>
                <tr>
                    <th><?php echo $dbarr['room_type']; ?></th>
                    <td><?php echo $dbarr['room_size']; ?></td>
                    <td><?php echo $dbarr['priceperday']; ?></td>
                    <td><?php echo $dbarr['pricepermonth']; ?></td>
                    <td><img src="<?php echo $dbarr['picture']; ?>" alt="" width="100" height="100"></td>
                </tr>
                
            <?php }
            mysqli_close($link);
            ?>

            </tbody>
        </table>
    </div>

</body>

<?php include('footer.html'); ?>