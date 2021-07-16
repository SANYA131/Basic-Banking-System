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
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "transfer");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $recipient_name =  $_REQUEST['recipient_name'];
        $sender_name = $_REQUEST['sender_name'];
        $account_number =  $_REQUEST['account_number'];
        $dob = $_REQUEST['dob'];
        $amount = $_REQUEST['amount'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO customer  VALUES ('$recipient_name',
            '$sender_name','$account_number','$dob','$amount')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Transferred Successfully!</h3>";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    <div class="content">
    <a href="http://localhost/TSFBank/viewcust.php"><button id="cont" class="cust"><strong>View Customers</strong></button></a><br>
    <a href="http://localhost/TSFBank/trans.php"><button id="cont" class="trans"><strong>Transfer Money</strong></button></a><br>
    <a href="history.php"><button id="cont" class="hist"><strong> Transaction History</strong></button></a>
    </div>
    </center>
</body>
 
</html>