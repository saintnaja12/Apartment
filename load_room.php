<?php 

if (isset($_SESSION['user']) && isset($_SESSION['password'])) 
{
    $path = "images/";
    
?>

<table id="table_id" class="table table-bordered">
<thead>
    <tr>
        <th scope="col">Edit-Delete</th>
        <th scope="col">Type</th>
        <th scope="col">Size</th>
        <th scope="col">Price per day</th>
        <th scope="col">Price per month</th>
        <th scope="col">Images</th>
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
        <th> <?php echo "<a href=update.php?id=$dbarr[room_id]
                &&room_type=$dbarr[room_type]
                &room_size=$dbarr[room_size]
                &price_day=$dbarr[priceperday]
                &price_month=$dbarr[pricepermonth]>
                <img src=".$path."modify.bmp></a>";
                
                echo "<a href=delete.php?id=$dbarr[room_id]
                &room_type=$dbarr[room_type]>
                <img src=".$path."delete.bmp></a></th>"; ?>
        <td><?php echo $dbarr['room_type']; ?></td>
        <td><?php echo $dbarr['room_size']; ?></td>
        <td><?php echo $dbarr['priceperday']; ?></td>
        <td><?php echo $dbarr['pricepermonth']; ?></td>
        <td><center><img src="<?php echo $path.$dbarr['picture']; ?>" width="150" height="100" alt=""></center></td>
    </tr>
    
<?php }
mysqli_close($link);
?>

</tbody>
</table>

<?php

}
else
{
    echo "Invalid to entry the Admin Page";
}

?>