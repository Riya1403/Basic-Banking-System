<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basic Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <form  action="userdetail.php" method="post">
        <div class="view">
          <div class="container">
            <div class="page-header">
              <h1 style="margin-top: 30px"><b><center>User information</center></b></h1>      
            </div>

            <!-- fetch and display data from MySQL -->
            <?php
              $conn = mysqli_connect('localhost','root','root');
              $query = 'SELECT * FROM bank.customers';
              $result = mysqli_query($conn,$query);
              echo '<table  class="table table-dark table-hover  text-center"><tr><th>Name</th><th>Email</th><th>Balance</th></tr>';
              while($row = mysqli_fetch_array($result)) {
                echo "<tr><td> ".$row['name']."</td><td>".$row['email']."</td><td>".$row['balance']."</td></tr>";
              }
              echo "</table>";
            ?>
            <div class="view">
            <table cellspacing=50px style="position: relative; left: 40%;">
              <tr>
                  <td> <h2>Select User</h2></td>
            <td>
              <select name="name" id = "uname">
                  <option>-Select-</option>
              
                  <option value="Riya Matwani"> Riya Matwani</option>

                  <option value="Varun Matwani"> Varun Matwani</option>

                  <option value="Arjun Sharma"> Arjun Sharma</option>

                  <option value="Hema Matwani"> Hema Matwani</option>

                  <option value="Dinesh Matwani"> Dinesh Matwani</option>

                  <option value="Chirag Tulsiani"> Chirag Tulsiani</option>

                  <option value="Manish Kataria"> Manish Kataria</option>

                  <option value="Deepika Gambani"> Deepika Gambani</option>

                  <option value="Simran Watwani"> Simran Watwani</option>

                  <option value="Ram Ansari"> Ram Ansari</option>
              
                    </select>
                  </td>
                </tr>
                  <tr>
                      <td></td>
                </tr>
                    </table>
              </div>
            </div>
          </div>
          <br>
          <div class="text-center">
            <button class="btn btn-success btn-lg mr-3 mb-3" type="submit" >Submit</button>
            <a href="bankhomepage.php" class="btn btn-danger btn-lg ml-3 mb-3" role="button"><i class="fa fa-close"></i>  Back  </a>
        </div>
  </form>    
</body>
</html>
