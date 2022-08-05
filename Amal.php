<?php
$con = mysqli_connect("localhost","root","","databaseamal");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ( isset ( $_GET['submit'] ) )
{
    if(empty($_GET['sensor']))
     echo "<script>alert('please enter sensor field');</script>";

    else {
        $sensoevalue = $_GET['sensor'];
        $query = "insert into amal_table(Sensor_value)
          	values(".$sensoevalue.")";
        $result1 = mysqli_query($con,$query);
         header ("location:Amal.php");
        }
}       
?>
<html>
    <head>
        <title>Amal Homework</title>
    </head>
    <body>
        <H3> Set sensore value </H3>
        <form action="Amal.php" method='get'>
            Sensor: <input type="number" name="sensor" id="sensor">
            <input type="submit" name="submit" value="Save">
        </form>
    </body>
</html>