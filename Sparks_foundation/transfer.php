<!DOCTYPE html>
<html>
    <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <link rel="stylesheet" type="text/css" href = "index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>choose user</title>
        
        <link href="login.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-color: #afeeee;
            }
  </style>
    </head>
    <body>
      <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Sparks Foundation</a>
        </div>
      </div>
    </div>
                  
         <div class="container">
           <div class="row" style="margin-top: 75px;">
              <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 col-xs-offset-1 column_style">
              <div class = "panel panel-primary">
              
              <div class="panel-heading">
              <h2>
                  Transfer Details
              </h2>
              </div>
                  <div class="panel-body">
                  <form action="posttransfer.php" method="POST"> 
                        <div class='form-group'><label for='from'>From :</label>
                        <select class='form-control' id='from' name='from'><option>Riya Matwani</option><option>Varun Matwani</option><option>Arjun Sharma</option><option>Hema Matwani</option><option>Dinesh Matwani</option><option>Chirag Tulsiani</option><option>Manish Kataria</option><option>Deepika Gambani</option><option>Simran Watwani</option><option>Ram Ansari</option></select>
                  </div>
                     <div class="form-group">
                      <label for="to">To :</label>
                        <select class="form-control" id="to" name="to">
                          <option>Riya Matwani</option><option>Varun Matwani</option><option>Arjun Sharma</option><option>Hema Matwani</option><option>Dinesh Matwani</option><option>Chirag Tulsiani</option><option>Manish Kataria</option><option>Deepika Gambani</option><option>Simran Watwani</option><option>Ram Ansari</option></select>
                  </div>
                  <div class="form-group">
                      <label for="amt">Enter amount to transfer :</label>
                      <input type="text" class="form-control" id="amt" pattern="^[0-9]*$" required="true" name="amt">
                  </div>
                  <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>   
                  </form>
                  </div>
                </div>
                </div>
            </div>
        </div> 
    </body>
</html>
