<?php
include_once "connection.php";


function DeleteChecked (){
    global $conn;
   


    if (isset($_POST["submit"])) {
        $checkbox = $_POST["checkbox"];
        for ($i=0;$i<count($checkbox);$i++) {
            $del_id = $checkbox[$i];
            $sql = "DELETE FROM job WHERE id='".$del_id."'";
            mysqli_query($conn,$sql );
        };
    };
    };
