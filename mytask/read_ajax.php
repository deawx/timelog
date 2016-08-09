<?php 
 error_reporting (E_ALL ^ E_NOTICE); 
 include '/db/config.php';
 new DatabaseConnection();
 global $pdo;

   $main_array = array();

   $select = $pdo->prepare('SELECT DISTINCT date(date_time) as d_t FROM time_l ORDER BY d_t desc');
     
   $select->execute();
                                        
        while ($row=$select->fetch())
        {  
        $row_array = array();
        $row_array['d_t'] = $row['d_t'];        
        $row_array['time_log'] = array();
        $d_t = $row['d_t'];  
        
        
        $selectd = $pdo->prepare('SELECT * FROM time_l WHERE date(date_time)=:d_t ORDER BY date_time DESC');
        $selectd->bindParam(':d_t',$d_t, PDO::PARAM_STR);
        $selectd->execute();
                                          
        while ($tl_fet=$selectd->fetch())
        {                   
            $row_array['time_log'][] = array(
                't_des' => $tl_fet['time_desc'],
                't_spe' => $tl_fet['time_spent'],
                't_datime' => $tl_fet['date_time']
            );

        }
       
        array_push($main_array, $row_array);
       
    }
    if(isset($_GET['page']) && isset($_GET['items_perpage']) && $_GET['page']>0 && $_GET['items_perpage']>0){
        $offset=(($_GET['page']-1) * $_GET['items_perpage']);
        $length= $_GET['items_perpage'];
        $post= array_slice($main_array, $offset, $length);
        $result= array('total_posts'=> count($main_array),'posts'=>$post);
        $results= json_encode($result);
        echo $results;
    }



