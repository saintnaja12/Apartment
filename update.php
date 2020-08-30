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

                if (isset($_SESSION['user']) && isset($_SESSION['password'])) 
                {
                    if (!isset($_POST['send'])) {
                        
                    $link = mysqli_connect("localhost", "root");
                    mysqli_set_charset($link,'utf8');
                    mysqli_query($link, "Use apartment;");

                    ?>
                    
                    <form method="post" action="<?php $PHP_SELF; ?>" target="_blank" enctype="multipart/form-data">
                        <input type="text" name="code" value="<?php echo $_GET['id']; ?>">

                        <?php $link = mysqli_connect("localhost", "root");
                        mysqli_set_charset($link,'utf8');
                        mysqli_query($link, "Use apartment;");
                        
                        $sql = "select * from room Where room_id = '".$_GET['id']."'";

                        $result = mysqli_query($link,$sql);
                        while ($dbarr = mysqli_fetch_array($result)){
                        
                        ?>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control" placeholder="Type" aria-label="Type" id="Type" name="Type" value="<?php echo $dbarr['room_type']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Size</label>
                            <input type="text" class="form-control" placeholder="Size" aria-label="Size" id="Size" name="Size" value="<?php echo $dbarr['room_size']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price / Day</label>
                            <input type="text" class="form-control" placeholder="Price_day" aria-label="Price_day" id="Price_day"
                                name="Price_day" value="<?php echo $dbarr['priceperday']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price / Month</label>
                            <input type="text" class="form-control" placeholder="Price_month" aria-label="Price_month" id="Price_month"
                                name="Price_month" value="<?php echo $dbarr['pricepermonth']; ?>">
                        </div>
                        <div class="custom-file">
                            <label for="exampleInputPassword1">Picture</label>
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"
                                id="pic" name="pic">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div><br>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Confirm" name="send">
                            <input class="btn btn-danger" type="reset" value="Cancel" name="Cancel">
                        </div>
                    </form>
                    
                    <?php

                        }
                    }
                    else
                    {
                        // $code = $_POST['Code'];
                        $type = $_POST['Type'];
                        $size = $_POST['Size'];
                        $priceday = $_POST['Price_day'];
                        $pricemonth = $_POST['Price_month'];

                        $path_pic=getcwd()."\\images";
                        if (isset($_FILES['picture'])) 
                        {
                            copy($_FILES['picture']['tmp_name'],"$path_pic/$type.jpg");
                        }
                        $image = $type.".jpg";

                        $link = mysqli_connect("localhost", "root");
                        mysqli_set_charset($link,'utf8');
                        mysqli_query($link, "Use apartment;");

                        $sql = "Update room Set room_type = '$type', room_size = '$size', priceperday = '$priceday', pricepermonth = '$pricemonth', picture = '$image' Where room_id = '".$_GET['id']."';";

                        $result = mysqli_query($link, $sql);

                        if ($result) 
                        {
                            echo "Edit complete";
                            mysqli_close($link);
                        }
                        else
                        {
                            echo "Error";
                        }

                    }
                }
                else
                {
                    echo "Invalid to entry the Admin Page";
                }

                ?>
            </div>
            
        </div>

    </div>

</body>

<?php include('footer.html'); 
    ob_end_flush();

?>