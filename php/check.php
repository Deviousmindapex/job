<?php
function error (){
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
    };



    if(empty($email)){
        $ErrMsg = "Email is not empty!";
        echo $ErrMsg;

    }elseif(!preg_match($pattern, $email)){
        $ErrMsgMatch = "Please Enter valid Email!";
        echo $ErrMsgMatch;

    };
};







    
    
    



?>
   
