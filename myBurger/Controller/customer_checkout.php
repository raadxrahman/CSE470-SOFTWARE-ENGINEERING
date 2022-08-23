<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="../View/style.css" />
<div class="sidenav" style = "background-image: url(https://i.pinimg.com/originals/9b/88/7c/9b887c9510b7abc8d1749712c702a6f8.jpg); background-size: contain ; background-repeat: no-repeat ; background-attachment: fixed ; width: 30% ; opacity : 95%" >
         <div class="login-main-text"> 
            <h2 style = "font-size : 70px; color : red ; text-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px red;">Burger,<br> Reloaded</h2>
            <p style="text-shadow: 1px 1px 2px black, 0 0 25px yellow, 0 0 5px black; font-size:20px;">Best Burgers in Town </p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               
                 <!-- <a href="../View/admin_burgers.php"> -->
                     <label style = "font-weight : bold ; font-family : Courier New ; font-size: 30px">Online:</label></br>
                     </a>

                    <form id="F" method="post">
                    <select name="Language">
                    <option value="bKash">bKash</option>
                        <option value="Nagad">Nagad</option>
                        <option value="Card">Card</option>
                        <option value="Online Banking">Online Banking</option>
                    </select>
                    <input type="submit" name="Submit" value="Submit">
                    </form>
                    </br>

                    <!-- <?php
                    // if(isset($_POST['Language'])) {
                    // echo "Selected Language: ".htmlspecialchars($_POST['Language']);
                    // }
                    // ?> -->

					 <a href="../Controller/customer_payment_information.php">
                     <label style = "font-weight : bold ; font-family : Courier New; font-size: 30px">Cash on Delivery</label></br></br></br>
					 </a>
                     
                     <a href="../Controller/customer_payment_information.php">
                     <label style = "font-weight : bold ; font-family : Courier New; font-size: 30px">Cash on Pickup</label></br>
					 </a>

                     </form>
                    <a href="../View/customer_cart.php">
                     <button type="submit" class="btn btn-secondary">Back to cart</button>
                     </a>
                    </br></br></br>
                     <a href="customer_login.php">
					 <label style = "font-weight : bold ; font-family : Courier New; font-size: 20px ;  color: red;">Logout</label></br></br></br>
					 </a>
                     
                  
                
               
            </div>
         </div>
      </div>
	  
	  