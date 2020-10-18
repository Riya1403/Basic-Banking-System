<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posttransfer</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $from = $_POST['from'];
    $to = $_POST['to'];
    if(strcmp($from,$to)!=0){
        $amt = $_POST['amt'];
        $currbal;
        $conn = mysqli_connect('localhost','root','root','bank');
        $query = 'SELECT balance FROM customers WHERE name = "'.$from.'"';
        $currentbalsend =  mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($currentbalsend)) {
            $currbalsend = $row['balance'];
        }

        $queryr = 'SELECT balance FROM customers WHERE name = "'.$to.'"';
        $currentbalrecv =  mysqli_query($conn,$queryr);
        while($row = mysqli_fetch_array($currentbalrecv)) {
            $currbalrecv = $row['balance'];
        }
        //echo $amt."<br>";
        // echo $currbal . "<br>";
        $low = $currbalsend - $amt;
        $up = $currbalrecv + $amt;
        //echo $low . "<br>";
        // echo $currbal . "<br>";
        $query1 = "UPDATE customers SET balance = " . $low . " WHERE name = '". $from . "'" ;
        // echo $query1;
        $addbal = mysqli_query($conn,$query1);
       
        //echo $up . "<br";
        // echo $currbal."<br>";
        $query5 = "UPDATE customers SET balance = " . $up . " WHERE name = '". $to . "'" ;
        // echo $query1;
        $addbal1 = mysqli_query($conn,$query5);
        $query2 = "INSERT INTO history (`Sender`, `Receiver`, `Amt`) VALUES ('". $from ."', '". $to ."', '".$amt."');";
        // echo $query2;
        $records = mysqli_query($conn,$query2);
        // var_dump($records);
        if(! $records){
            echo mysqli_error($conn);
        }
        echo "<script>
        alert('Transcation Sucessful');
        window.location.href = 'bankhomepage.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Sender and Receiver cannot be same!');
        window.location.href = 'transfer.php';
        </script>";
    }
}
?>
</body>
</html>