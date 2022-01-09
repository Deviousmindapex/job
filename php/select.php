<?php

include_once "connection.php";


function selectFrom(){
global $conn; 

$sql = "SELECT date,email, id FROM job";
$result = mysqli_query($conn,$sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
    echo  "<tr><td><input name='checkbox[]' type='checkbox' id='checkItem' class='chkbox' value=".$row['id']."></td>". "<td>". $row["email"]."</td>". "<td>" . $row["date"]. "</td></tr>" ;
};

}else {
    echo "0 results";
};

mysqli_close($conn);


};




?>

