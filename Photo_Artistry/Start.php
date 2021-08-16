<?php  
     include 'Start_Header.php';
     include 'Option.php';
?>
	  
      <section id="banner">
      	        <img src="Picture/logo2.png" class="logo">
      	        <div class="container">
      	        	  <span class="text1">Welcome to</span>
      	        	  <span class="text2">PhotoArtistry</span>       
      	        </div>
      </section>

<?php  
     include 'Menubar.php';
     include 'MenuButton.php';
?>

      <section id="gallary">
      	       <div class="title">
      	       	     <h2>Photo Gallary</h2>
      	       </div>
      </section>

      <div id="img">
      	   <h1 align="left">&nbsp;Wedding Photography:</h1><br>
      	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <?php  
             echo "<img src='Picture/OIPp.jpg' height='400' width='400' vspace='20' class='img1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  
             ?>
      	   <img src="Picture/43.jpg" height="400" width="400" vspace="20" class="img1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      	   <img src="Picture/57.jpg" height="400" width="400" vspace="20" class="img1"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <?php  
                  foreach ($wedding as $w)
                  {
                    echo "<img src='".$w["img"]."' height='400' width='400' vspace='20' class='img1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                  } 
             ?>
           
           <br><br><br>
      	   <h1 align="left">&nbsp;Adventure Photography:</h1><br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/5.jpg" height="400" width="400" vspace="20" class="img1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/6.jpg" height="400" width="400" vspace="20" class="img1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/7.jpg" height="400" width="400" vspace="20" class="img1"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <?php  
                  foreach ($adventure as $a)
                  {
                    echo "<img src='".$a["img"]."' height='400' width='400' vspace='20' class='img1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                  } 
             ?>

           <br><br><br>
      	   <h1 align="left">&nbsp;Event Photography:</h1><br>
      	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/76.jpg" height="400" width="400" vspace="20" class="img1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/9.jpg" height="400" width="400" vspace="20" class="img1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/10.jpg" height="400" width="400" vspace="20" class="img1"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <?php  
                  foreach ($event as $e)
                  {
                    echo "<img src='".$e["img"]."' height='400' width='400' vspace='20' class='img1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                  } 
             ?>

           <br><br><br>
      	   <h1 align="left">&nbsp;Film Photography:</h1><br>
      	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/11.jpg" height="400" width="400" vspace="20" class="img1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/12.jpg" height="400" width="400" vspace="20" class="img1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/13.jpg" height="400" width="400" vspace="20" class="img1"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <?php  
                  foreach ($film as $f)
                  {
                    echo "<img src='".$f["img"]."' height='400' width='400' vspace='20' class='img1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                  } 
             ?>

           <br><br><br>
      	   <h1 align="left">&nbsp;Fashion Photography:</h1><br>
      	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/OIP (2).jpg" height="400" width="400" vspace="20" class="img1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/15.jpg" height="400" width="400" vspace="20" class="img1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="Picture/16.jpg" height="400" width="400" vspace="20" class="img1"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <?php  
                  foreach ($fashion as $fa)
                  {
                    echo "<img src='".$fa["img"]."' height='400' width='400' vspace='20' class='img1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                  } 
             ?>
      	   
           <a href="#" class="to-top">
               <i class="fas fa-arrow-up"></i>
           </a>
      </div>

<?php  
     include 'Footer.php';
     include 'Start_Footer.php';
?>