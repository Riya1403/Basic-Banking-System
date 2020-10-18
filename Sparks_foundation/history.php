<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basic Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href = "index.css">
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
    <?php
        $conn = mysqli_connect('localhost','root','root');
        $query = 'SELECT * FROM bank.history';
        $result = mysqli_query($conn,$query);
        echo '<table  class="table table-dark table-hover  text-center"><tr><th>Sender</th><th>Receiver</th><th>Amount</th></tr>';
        while($row = mysqli_fetch_array($result)) {
        echo "<tr><td>".$row['Sender']."</td><td>".$row['Receiver']."</td><td>".$row['Amt']."</td></tr>";
        }
        echo "</table>";
    ?>
    <div class="d-flex justify-content-center">
    <a href="bankhomepage.php" class="btn btn-success btn-lg ml-3 mb-3" role="button" style="margin:" ><i class="fa fa-close"></i>  Home  </a>
    </div>
</body>