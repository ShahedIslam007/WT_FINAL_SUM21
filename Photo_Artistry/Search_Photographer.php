<?php  
     include 'Controller/Photographers.php';
     $key = $_GET["key"];
     $photographers = search($key);

     if(count($photographers) > 0)
     {

     	foreach ($photographers as $p)
     	{
     		//echo "<p>".$p["name"]."</p>";
     		echo "<a href='Adventure_Photographer.php?id=".$p["id"]."'>".$p["category"]."</a><br>";
     	}
     	
     }
?>