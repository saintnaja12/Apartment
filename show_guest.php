<table id="table_id" class="table table-bordered">
<thead>
    <tr>
        <th scope="col">Fullname</th>
        <th scope="col">E-mail</th>
        <th scope="col">Comment</th>
        <th scope="col">Date</th>
        <th scope="col">IP Address</th>
    </tr>
</thead>
<tbody>

<?php 

$link = mysqli_connect("localhost", "root");
mysqli_set_charset($link,'utf8');
mysqli_query($link, "Use apartment;");

$sql = "select * from guestbook order by date desc";

$result = mysqli_query($link,$sql);
while ($dbarr = mysqli_fetch_array($result)){

?>
    <tr>
        <th><?php echo $dbarr['name']; ?></th>
        <td><?php echo $dbarr['email']; ?></td>
        <td><?php echo $dbarr['comment']; ?></td>
        <td><?php echo $dbarr['date']; ?></td>
        <td><?php echo $dbarr['ip']; ?></td>
    </tr>
    
<?php }
mysqli_close($link);
?>

</tbody>
</table>