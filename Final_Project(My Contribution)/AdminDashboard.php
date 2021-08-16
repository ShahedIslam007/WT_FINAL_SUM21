<?php  
     include 'AdminDashboard_Header.php';
?>

<?php
     if(!isset($_COOKIE['loggedUser']))
     {
        header("Location: Admin_login.php");
     }
?>
     <h1 align="center">Welcome <?php echo $_COOKIE["loggedUser"]; ?> </h1>
     <br><br><br><br><br><br>    
     <h1 align="center">
          <font face="Comic sans MS" size="7" color="#cc6600">Admin DashBoard<br>
                 <a href="Admin_Photographer_CRUD.php"><button>Photographer</button></a>&nbsp;&nbsp;
                 <a href="Admin_Tutor_CRUD.php"><button>Tutor</button></a>&nbsp;&nbsp;
                 <a href="Admin_Learner_CRUD.php"><button>Learner</button></a>&nbsp;&nbsp;
                 <a href="Photographer_District.php"><button>District</button></a>&nbsp;&nbsp;
                 <a href="Upload_Galary.php"><button>Upload on Gallary</button></a>&nbsp;&nbsp;
                 <a href="Payment.php"><button>Payment Management</button></a>&nbsp;&nbsp;
                 <a href="Verify_Photographers.php"><button>Verify Registration</button></a>&nbsp;&nbsp;
                 <a href="Booking_Photographer.php"><button>Booking Photographer</button></a>&nbsp;&nbsp;
                 <a href="Ratting.php"><button>Review & Rattings</button></a>
                 <a href="addAdmin.php"><button>Add Admin</button></a>
          </font>
      </h1><br>

      <div align="center">
            <input type="text" name="" placeholder="Search??" size="50" onkeyup="search(this)">
      </div>

      <div id="result" align="center"></div>
   
<?php  
     include 'AdminDashboard_Footer.php';
?>
     