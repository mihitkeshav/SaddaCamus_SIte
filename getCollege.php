<?php
    
    $q = $_GET['q'];


    $database  = "saddaejd_expansions";
    $server = "localhost";
    $username = "saddaejd";
    $password = "C@mpusjoy#69";


    $conn = mysqli_connect($server,$username,$password,$database);

    if(! $conn)
    {
        die("Connection failed".mysqli_error());
    }


mysqli_select_db($conn,"saddaejd_expansions");
$sql = "SELECT * FROM colleges WHERE location = '".$q."'";
$result = mysqli_query($conn,$sql);

?>






<?php 
     echo "<option selected class=\"disabled\">--Select College--</option>";                                   
    while($row = mysqli_fetch_assoc($result))
    {
         echo "<option>". $row['name']." </option>";

    }


mysqli_close($conn);
?>
