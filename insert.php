<?php 

if (isset($_SESSION['user']) && isset($_SESSION['password'])) {

    if (!isset($_POST['send'])) {

?>

<center>
    <h6>INSERT FORM</h6>
</center>
<form method="post" action="<?php $PHP_SELF; ?>" target="_blank" enctype="multipart/form-data">
    <div class="form-group">
        <label>Type</label>
        <input type="text" class="form-control" placeholder="Type" aria-label="Type" id="Type" name="Type">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Size</label>
        <input type="text" class="form-control" placeholder="Size" aria-label="Size" id="Size" name="Size">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Price / Day</label>
        <input type="text" class="form-control" placeholder="Price_day" aria-label="Price_day" id="Price_day"
            name="Price_day">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Price / Month</label>
        <input type="text" class="form-control" placeholder="Price_month" aria-label="Price_month" id="Price_month"
            name="Price_month">
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
    else
    {
        $path_pic = getcwd()."\\images";  //กำหนดพาธ
        if (isset($_FILES['pic'])) 
        {
            $type = $_POST['Type'];
            $size = $_POST['Size'];
            $price_day = $_POST['Price_day'];
            $price_month = $_POST['Price_month'];

            if (copy($_FILES['pic']['tmp_name'], "$path_pic\\$type.jpg")) 
            {
                $image = $type.".jpg";

                $link = mysqli_connect("localhost", "root");
                mysqli_set_charset($link,'utf8');
                mysqli_query($link, "Use apartment;");

                $sql = "Insert Into room (room_type, room_size, priceperday, pricepermonth, picture)
                        values ('$type','$size', '$price_day', '$price_month', '$image');";

                $result = mysqli_query($link,$sql);

                if ($result) {
                    echo "Insert complete<p></p>";
                }
                else
                {
                    echo "Error";
                }
            }
            else
            {
                print ("Error copying file");
            }
        }
        else
        {
            echo "No file upload";
        }
    }
}
else
{
    echo "Invalid to entry the Admin Page";
}
                
                ?>