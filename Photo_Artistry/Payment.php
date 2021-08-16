<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Payments</title>
      <script type="text/javascript">
               function loadDoc()
               {
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET","AllPhotographers_Payment.php",true);
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
                    xhr.open("GET","AllTutors_Payment.php",true);
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
      <h1 align="center">All Payment Informations</h1><br><br>
      <div align="center">
      	<button onclick="loadDoc()">All Photographers Paymnet</button>&nbsp;&nbsp;&nbsp;&nbsp;
          <button onclick="loadDoC()">All Tutors Paymnet</button>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="addPhotographersPayment.php"><button>Insert Photographers Paymnet</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="addTutorsPayment.php"><button>Insert Tutors Paymnet</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
      </div><br><br>

      <div id="all"></div>
      <div id="All"></div>
</body>
</html>