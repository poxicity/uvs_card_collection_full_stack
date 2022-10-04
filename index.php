<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UVS Card Collection Search</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    include "db_connect.php";
    
  ?>
  
  
  <div align="center">
      <img src="/images/MHA_Set3_FB-860-x-320_2.jpg">;
  </div>
  
  

   <form class="form-horizontal" action="search_keyword.php">
   <fieldset>

<!-- Form Name -->
<legend align="center">UVS Card Collection Search</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search</label>
  <div class="col-md-4">
    <input id="keyword" name="keyword" type="search" placeholder="e.g. card name" class="form-control input-md" required="">
    <p class="help-block">Enter a card name to search for.</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-inverse">Search</button>
  </div>
</div>
</fieldset>
</form>



    <hr>

    <?php
    
$mysqli->close();
    
    ?>
    
</body>
</html>