<?php  

    include 'Model/db_config.php';
    
     function getAllDepartment()
     {
     	$query = "select * from department"
        $rs = get($query);
        return $rs;
     }

?>