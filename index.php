<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href="bootstrap.css">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="ewooral.css">
<title>
Ewooral, Inc.
</title>
</head>
<body>
<?php  if ((!isset($_POST['Uname'])) || (!isset($_POST['Pswd']))) 
    {  // visitor needs to enter a name and password ?> 
    <div class="overlay">
    <div id="particles-js">
    <div class="main">
    <br><br><br><br>
       <h1 style="font-size:25px"> CHURCH OF PENTECOST<br> <p style="font-size:19px; top: 50%;color:wheat;">Two_Streams_DB</p><br></h1>
        <!--img src="pentecost logo.gif" style="width:90px; height: 90px;"><br><br-->
<div style="font-size:18px;" > 
    Ewooral <br>
  
    <form action="seemyinfo.php" method="POST">
    <input type="text" placeholder="Enter Username" name="Uname" required><br>
    <input type="password" placeholder="Enter Password" name="Pswd" required><br>
   <input type="submit" value="Login" name="submit" >
   </form>
    
</div>
</div>
</div>
</div>
<script  src="particles.js" type="text/JavaScript"></script>
<script  src="app.js" type="text/JavaScript"></script>
<script></script>
<?php  } else if(($_POST['Uname']=='user') && ($_POST['Pswd']=='pass')) {    // visitor's name and password combination are correct 
       echo '<h1>Here it is!</h1> <p>I bet you are glad you can see this secret page.</p>';  } else {    // visitor's name and password combination are not correct 
          echo '<h1>Go Away!</h1> <p>You are not authorized to use this resource.</p>';  } ?>
</body>
</html>
