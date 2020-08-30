<?php

if(!isset($_POST['send']))
{

?>

<?php include('header.html'); ?>

<br>

<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <form method="post" action="<?php $PHP_SELF; ?>" target="_blank">
            <div class="form-group">
                <label>Fullname</label>
                <input type="text" class="form-control" placeholder="name" aria-label="name" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">E-mail</label>
                <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Comments</label>
                <textarea class="form-control" cols="30" rows="3" placeholder="comment" aria-label="comment" id="comment" name="comment"></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Confirm" name="send">
                <input class="btn btn-danger" type="reset" value="Cancel" name="Cancel">
            </div>

        </form>
    </div>
    <div class="col-4"></div>
    <div class="col-4"></div>
    <div class="col-4">
        <a href="show.php">Show all guest book</a>
    </div>
    <div class="col-4"></div>
</div>

<?php 

}
else
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    if($name == "" || $email == "" || $comment == "")
    {
        echo "<script>
        alert('Pls enter complete!');
        window.location.href='guest.php';
        </script>";
    }

    $currentdatetime = date("Y-m-d G:i:s");

    $link = mysqli_connect("localhost", "root");
    mysqli_set_charset($link, 'utf8');
    mysqli_query($link, "Use apartment");

    $sql = "Insert Into guestbook (name, email, comment, date, ip)
            Values ('$name', '$email', '$comment', '$currentdatetime', '$_SERVER[REMOTE_ADDR]');";

    $result = mysqli_query($link, $sql);

    if($result)
    {
        echo "Insert guest complete <br>";
    }
    else
    {
        echo "Error";
    }
    echo "<a href=show.php>Show all guest</a><br>";
    echo "<a href=guest.php>back to guest form</a>";

}

?>