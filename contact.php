<?php
include "php/select.php";
include "php/delete.php";
include "php/export.php"

    ?>
   
    <?php DeleteChecked (); ?>
    <?php export(); ?>
  

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="css/contact.css">

<script>
         function selects(){  
                var ele=document.getElementsByName('checkbox[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  ;
                        ele[i].checked=true;  
                }  ;
            }  ;
            function deSelect(){  
                var ele=document.getElementsByName('checkbox[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  ;
                        ele[i].checked=false;  
                      
                }  ;
            }  ;        
</script>

 
</head>
<body>
<form action="contact.php" method="post">

<input class="selectall" type="button" onclick='selects() '  value="Select All"/>  
<input class="deselectall" type="button" onclick='deSelect() '  value="Deselect All"/> 

<button class="submit" type="submit" name="submit">Delete</button>
<button type="submit" class="export" name="export">Export to csv</button>
<br><br><br>

<table>
<thead>
    <tr>
        <th>Check </th>
        <th>Email</th>
        <th>Date</th>
    </tr>
</thead>


<?php
  selectFrom();
    ?>




</table>


</form>


</body>
</html>