<?php

$link = mysqli_connect("localhost", "root");
mysqli_set_charset($link,'utf8');
mysqli_query($link, "Use apartment;");

$sql = "select * from counter";

$result = mysqli_query($link,$sql);
while ($dbarr = mysqli_fetch_array($result))
{
    $pgcount = $dbarr['countnum'] . "<br>";
}

$num = 1.0;
// $pgcount = 0.0;
// echo is_numeric($pgcount);
$pgcount = (float)$pgcount+$num;
$pgcount = "00000" . $pgcount;
$pgcount = substr($pgcount, -6);

echo "<p></p><center><b></b> You ar visitor number $pgcount </center><p></p>";

$sql = "Update counter Set countnum = '$pgcount' Where id = 1;";
$result = mysqli_query($link, $sql);

// if (is_numeric($var)) {
//     echo ($var + 1);
// } else {
//     echo '$var ไม่เป็นตัวเลข!';
// }

?>