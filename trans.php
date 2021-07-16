<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!--Bootstrap Css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Transfer Money</title>
	<link rel="icon" href="Logo.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="trans.css">
</head>
<body>
	<nav class="navbar fixed-top navbar-dark navbar-expand-lg">
		<div class="container">
			<div class="row row-header">
				<div class="col-12 col-md-6">
					<a href="Index.php"><img src="Logo.png" style="width: 100px; height: 70px;"></a>
				</div>
				<div class="col-12 col-md-6">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
         		<span class="navbar-toggler-icon"></span>
        		</button>
       			<div class="collapse navbar-collapse" id="Navbar">
        		<ul class="navbar-nav mr-auto menu">
        		<li class="nav-item"><a class="nav-link" href="Index.php">Home</a></li>
        		<li class="nav-item"><a class="nav-link" href="About.php">About Us</a></li>
        		<li class="nav-item"><a class="nav-link" href="Contact.php">Contact Us</a></li>
        	</ul>
          </div>
         </div>
	  </div>
	</div>
	</nav>
	<h3 style="text-align: center; margin-top: 150px; color: white;text-shadow: 0 0 3px black,0 0 5px black">Transfer Your Money Safely!</h3>
	<center>
	<form action="insert.php" method="post">
             
             
<p>
                <input type="text" name="recipient_name" id="recName" placeholder="Recipient's Name" required/>
            </p>
 
 
 
             
             
<p>
                <input type="text" name="sender_name" id="sendName" placeholder="Sender's Name" required/>
            </p>
 
 
 
             
             
<p>
                <input type="int" name="account_number" id="accNum" placeholder="Account Number" required/>
            </p>
 
 
             
             
             
<p>
                <input type="date" name="dob" id="dob" placeholder="D.O.B" required/>
            </p>
 
 
             
             
             
<p>
                <input type="int" name="amount" id="amount" placeholder="Amount" required/>
            </p>
 
 
             
            <button type="submit" value="Submit" class="send"><strong>Transfer</strong></button>
        </form>
    </center>
</body>
</html>