<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Admin:candidates </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 35px;color:red; font-family: Times New Roman;"> <a href ="../Controller/admin_home.php">Burger, </br>Reloaded </a></div>
			<div class="col-md-10" style="text-align: right"> <br>
				
				<a href="admin_burgers.php" style="margin-left: 20px;"> Burgers </a> 
				<a href="admin_addons.php" style="margin-left: 20px;"> Add-Ons  </a> 
				<a href="admin_sides.php" style="margin-left: 20px;"> Sides </a>
				<!-- <a href="cart.php"> <i class="fa-solid fa-cart-shopping"></i> </a> -->
				<a href="../Controller/admin_login.php" style="margin-left: 20px; color: red"> Logout  </a>
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title" style="color: black;background:white; opacity:90%;"> Candidates </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:white; opacity:95%;">
			<div class="row" style="padding:5px;"> 
				<div class="col-md-2"style="font-size:15px; color: #F2674A;font-family: Verdana;">  Job Id </div>
				<div class="col-md-2"style="font-size:15px; color: #F2674A;font-family: Verdana;">  Name </div>
				<div class="col-md-2"style="font-size:15px; color: #F2674A;font-family: Verdana;">  Phone </div>
                <div class="col-md-3"style="font-size:15px; color: #F2674A;font-family: Verdana;">  Email </div>
                <div class="col-md-3"style="font-size:15px; color: #F2674A;font-family: Verdana;">  Qualification (yrs)</div>

			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("../Model/DBconnect.php");
			$sql = "SELECT * FROM job_candidates";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				
				while($row = mysqli_fetch_array($result)){
				
			?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-2">  <?php echo $row[0]; ?> </div>
				<div class="col-md-2">  <?php echo $row[1]; ?> </div>
				<div class="col-md-2">  <?php echo $row[2]; ?> </div>
                <div class="col-md-3">  <?php echo $row[3]; ?> </div>
                <div class="col-md-3">  <?php echo $row[4]; ?> 

				
				<!-- <form action="admin_remove_jobs_backend.php" method="POST"><input type="hidden" name="job_id" value=<?php echo $row[0] ?>>
				<input type="submit" button type="button" class="btn btn-primary" style="background-color:red; font-size:10px; border-radius:12px;" 
				name="submit" value="Delete"></button></form> -->
				
				
				</div>
				
				
			</div>
			
			<?php 
				}					
			}
			?>
			
		</div>
		
		
		
		
		
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 

       
        
        <div class="border border-light p-3 mb-4">
        
          <div class="text-center">

		  <button type="button" class="btn btn-primary"style="background-color:green;border-radius: 12px;"> 
			<a href="admin_view_candidates_sorted.php">Sort by Experience</a></button></br></br></br></br>


            <button type="button" class="btn btn-primary"style="background-color:green;border-radius: 12px;"> 
			<a href="admin_jobs.php">View Jobs</a></button>
			
          

		  <!-- <div class="text-center"> -->
            <button type="button" class="btn btn-primary"style="background-color:green;border-radius: 12px;"> 
			<a href="../Controller/admin_add_jobs.php">Add Jobs</a></button>
			
          </div>
        
        </div>
    
      </div>
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

