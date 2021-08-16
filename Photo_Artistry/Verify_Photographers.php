<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verify Photographers Registration</title>
	<script type="text/javascript">
               function loadDoc()
               {
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET","AllPhotographers_Registration.php",true);
                    xhr.onreadystatechange = function()
                    {
                         if (this.readyState == 4 && this.status == 200) 
                         {
                              get("all").innerHTML = this.responseText;
                         }
                    };

                    xhr.send();
               }

               function loadDoC()
               {
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET","All_Confirm_Photographers.php",true);
                    xhr.onreadystatechange = function()
                    {
                         if (this.readyState == 4 && this.status == 200) 
                         {
                              get("All").innerHTML = this.responseText;
                         }
                    };

                    xhr.send();
               }

               function get(id)
               {
                    return document.getElementById(id);
               }
     </script>
</head>
<body>
     <div align="right">

           <a href="AdminDashboard.php" style="text-decoration: none; font-size: 28px;">Dashboard</a>
      </div>
      <h1 align="center">Verify All Photographers Registration</h1><br>
      <div align="center">
      	    <button onclick="loadDoc()">All Photographers</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      	    <span>
      	    	  <button onclick="loadDoC()">Verified Photographers</button>
      	    </span>
      </div><br><br>

      <div id="all"></div>
      <div id="All"></div>

</body>
</html>


