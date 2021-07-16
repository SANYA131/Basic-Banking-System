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
	<title>View Customers</title>
	<link rel="icon" href="Logo.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="view.css">
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
		<h2 style="text-align: center; margin-top: 100px; color: white;text-shadow: 0 0 10px black,0 0 10px black;font-family: Times New Roman;">All Customer's Information is Available Here!</h2>	
	<table>
<tr>
<th>S.No.</th>
<th>Customer Name</th>
<th>Account Number</th>
<th>Email Id</th>
<th>Current Balance</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "basicbanksys");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM customerinfo";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["S.No."]. "</td><td>" . $row["Customer Name"] . "</td><td>"
. $row["Account Number"]. "</td><td>" . $row["Email Id"] . "</td><td>" . $row["Current Balance"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<div class="opt">
				<a href="trans.php"><button class="send"><strong>Send Money</strong></button></a>
			</div>

</body>
</html>