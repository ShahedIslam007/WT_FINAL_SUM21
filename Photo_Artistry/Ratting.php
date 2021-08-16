<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Review & Ratting Informations</title>
	<script type="text/javascript">
               function loadDoc()
               {
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET","Photographers_Review.php",true);
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
                    xhr.open("GET","Tutors_Review.php",true);
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
      <h1 align="center">User Review & Ratting Informations</h1><br><br>
      <div align="center">
      	    <button onclick="loadDoc()">Photographers Review & Ratting</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      	    <button onclick="loadDoC()">Tutors Review & Ratting</button>
      </div><br><br>

      <div id="all"></div>
      <div id="All"></div>
</body>
</html>