<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="style.css" />
<div class="sidenav" style = "background-image: url(https://i.pinimg.com/originals/9b/88/7c/9b887c9510b7abc8d1749712c702a6f8.jpg); background-size: contain ; background-repeat: no-repeat ; background-attachment: fixed ; width: 30% ; opacity : 95%" >
         <div class="login-main-text"> 
            <h2 style = "font-size : 70px ; color : red;">Burger,<br> Reloaded</h2>
            <p "font-size: 40px">Best Burgers in Town </p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action ="admin_add_jobs_backend.php" class="form_design" method="post">
                 <div class="form-group">
                     <label style = "font-weight : bold ; font-family : Courier New">Job Id</label>
                     <input type="text" name = "job_id" class="form-control" placeholder="Job Id">
                  </div>
                  <div class="form-group">
                     <label style = "font-weight : bold ; font-family : Courier New">Designation</label>
                     <input type="text" name = "designation" class="form-control" placeholder="Designation">
                  </div>
				  
				  <div class="form-group">
                     <label style = "font-weight : bold ; font-family : Courier New">Vacancy</label>
                     <input type="text" name = "vacancy" class="form-control" placeholder="Vacancy">
                  </div>
                  <input type="submit" value="Add Job">
                  
               </form>
               <a href="admin_jobs.php">
               <button type="submit" class="btn btn-secondary">Jobs</button>
                     </a>
            </div>
         </div>
      </div>
	  
	  