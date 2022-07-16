<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> THE TITLE </title>
    
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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> ABC School </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="#"> Home </a> 
				<a href="#" style="margin-left: 20px;"> Students </a> 
				<a href="#" style="margin-left: 20px;"> Teachers  </a> 
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> All Students List </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  Student ID </div>
				<div class="col-md-3">  Student Name </div>
				<div class="col-md-3">  Class </div>
				<div class="col-md-3">  Address </div>
		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM burger";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo $row[1]; ?> </div>
				<div class="col-md-3">  <?php echo $row[2] ?> </div>
				<div class="col-md-3">  <?php echo $row[3] ?> </div>
			</div>
			
			<?php 
				}					
			}
			?>
			
		</div>
		
		
		
		
		
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

