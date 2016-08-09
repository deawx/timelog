<?php
error_reporting (E_ALL ^ E_NOTICE); 
 include '/db/config.php';
 new DatabaseConnection();
 global $pdo;
 
if (filter_input(INPUT_POST, 'desc') && filter_input(INPUT_POST, 'desc') != ''){
    $desc=filter_input(INPUT_POST, 'desc');
    $tspent=filter_input(INPUT_POST, 'tspe');
    $date = date('Y-m-d H:i:s');
 
  $params=array("date"=>$date, "desc"=>$desc,"tspent"=>$tspent);
  $insert = $pdo->prepare("INSERT INTO time_l(date_time,time_desc,time_spent)VALUES(:date,:desc,:tspent)");
   
    $insert->bindParam(':date', $date);
    $insert->bindParam(':desc', $desc);
    $insert->bindParam(':tspent', $tspent);

    $insert->execute();
        
      echo "<p> submitted </p>";  
      exit();
        
    
    
    
    

}