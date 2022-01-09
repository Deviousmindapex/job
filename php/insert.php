<?php
include_once "connection.php";

function error (){
    global $conn;


    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    
    if (isset($_POST["submit"])) {
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
    };



    if(empty($email)){
        $ErrMsg = "<label class='errorField' for='email'>Email cannot be empty!</label>";
        echo $ErrMsg;

    }elseif(!preg_match($pattern, $email)){
        $ErrMsgMatch = "<label class='errorField' for='email'>Please Enter valid Email!</label>";
          
        
        
        echo $ErrMsgMatch;

    }else {
        
        
           
                $date = date('Y-m-d H:i:s');
                



                $sql = "INSERT INTO job (date, email) VALUE ('$date', '$email')";
                $insert = mysqli_query($conn, $sql);
                header('Location: index.php');
            };
            mysqli_close($conn);

        };
    


?>