<?php
     include 'models/db_config.php';    
     
	 $name="";
     $err_name="";

     $email="";
     $err_email=""; 
	 
	 $Photographertype="";
     $err_Photographertype="";
	 
	 $desc="";
	 $err_desc="";
	 
	 $random="";
	 
     $err_db="";
     $hasError = false;
	 
	 $Photographertype = array("Weddingphotographer","Eventphotographer","Fashionphotographer","Filmphotographer","Adventurephotographer");

      function Service($service){
				global $services;
				foreach($services as $s){
					if($s == $service)
					{
					 return true;
				    }
				}
				return false;
			}

       if(isset($_POST["Add_Gallery"]))
      {
		    
			
			
			
				//Photographertype
			
			if(!isset($_POST["Photographertype"])){
				$err_Photographertype="Photographer Type Required";
				$hasError = true;
			}
			else{
				$Photographertype=$_POST["Photographertype"]; 
				
            } 
		   
		
		    if(empty($_POST["desc"])) //description validation
            {
				$err_desc ="Description Required";
				$hasError = true;
            }
            else
            {
				$desc = $_POST["desc"];
            }
			
			
			
			if(!$hasError){
				
			$fileType = strtolower(pathinfo(basename($_FILES["doc"]["name"]),PATHINFO_EXTENSION));
		    $file = "Gallery/Gallery_Images/".uniqid().".$fileType";
		    move_uploaded_file($_FILES["doc"]["tmp_name"],$file);
				
			
			$rs = insertGallery($name,$email,$Photographertype,$file,$desc);
			if($rs === true){
				header("Location: Allgallery.php");
			}
			$err_db = "invalid";
			
		    }
		  }
				
//.................Upload End..............				
			function insertGallery($name,$email,$Photographertype,$image,$desc){
		    $query  = "insert into p_gallery values (NULL,'$name','$email','$Photographertype','$image','$desc')";
		    return execute($query);	
		    }
		
		    function getAllgallery(){
		    $query = "SELECT * FROM p_gallery";
			$rs = get($query);
			return $rs;
		    }
			
    

		    
	   
?>	  
				