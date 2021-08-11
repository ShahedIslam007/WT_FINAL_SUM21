<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Booking Photographer</title>
	<script type="text/javascript">
               function loadDoc()
               {
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET","All_Booking_Photographers.php",true);
                    xhr.onreadystatechange = function()
                    {
                         if (this.readyState == 4 && this.status == 200) 
                         {
                              get("all").innerHTML = this.responseText;
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
      <h1 align="center">Booking Photographer</h1><br><br>
      <div align="center">
      	    <button onclick="loadDoc()">Booking History</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      	    <span>
      	    	  <a href="Booking_District.php"><button>Booking Photographer</button></a>
      	    </span>
      </div><br><br>

      <div id="all"></div>
</body>
</html>