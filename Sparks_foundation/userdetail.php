<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userdetail</title>
    <link rel="stylesheet" type="text/css" href = "index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: #afeeee;
        }
    </style> 
</head>
<body>
<form action="transfer.php" method="POST">
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name = $_POST['name'];
    session_start();
    $_SESSION["name"] = $name;
    $conn = mysqli_connect('localhost','root','root');
    $query = 'SELECT  * FROM bank.customers  WHERE name = "' . $name . '" ';
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result)) {
       echo "<h1>User Details</h1><br>";
       echo '<table  class="table table-dark table-hover  text-center"><tr><th>Name</th><th>Email</th><th>Balance</th><th>Contact</th></tr>';
       echo "<tr><td> ".$row['name']."</td><td>".$row['email']."</td><td>".$row['balance']."</td><td>".$row['contact']."</td></tr></table>";
    }
}
?>
<br>
<div class="text-center">
    <a href="transfer.php" class="btn btn-primary btn-md" role="button"><i class="fa fa-close"></i>  Transfer to </a>
</div>
    	
<br>
<div class="text-center">
    <a href="bankhomepage.php" class="btn btn-primary btn-md" role="button"><i class="fa fa-close"></i>  Home  </a>
</div>
<br>	
<div class="text-center">
    <a href="selectuser.php" class="btn btn-danger btn-md" role="button"><i class="fa fa-close"></i>  Back  </a>
</div>
</form>  	
</body>
</html>
