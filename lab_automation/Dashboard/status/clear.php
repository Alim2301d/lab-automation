<?php

include("../config.php");

$pid= $_GET["id"];

$query= "update testing set status=1 where testing_id=$pid";
if(mysqli_query($db,$query)){

    header("location: ../index.php?page=inventory.php");
}

?>


