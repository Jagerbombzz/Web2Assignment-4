<?php


// Start Session
session_start();

// check user login
if(empty($_SESSION['user_id']))
{
    header("Location: index.php");
}

// Database connection
require __DIR__ . '/database.php';
$db = DB();

// Application library ( with DemoLib class )
require __DIR__ . '/lib/library.php';
$app = new DemoLib();

$user = $app->UserDetails($_SESSION['user_id']); // get user details

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css"  />
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           <label class="h5">welcome : <?php echo $user->name ?></label>
            <li><a href=""></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="glyphicon glyphicon-user"></span>&nbsp;Hi <?php echo $user->name ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
                <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="clearfix"></div>
      
    
<div class="container-fluid" style="margin-top:80px;">
  
    <div class="container">
  
        <hr />
        
        <h1>
        <a id="navpanel" href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a> &nbsp; 
        <a id="navpanel" href="profile.php"><span class="glyphicon glyphicon-user"></span> User Profile</a> &nbsp; 
        <a id="navpanel" href="RawData.html.php"><span class="glyphicon glyphicon-stats"></span> Show Data</a> &nbsp; 
        <a id="navpanel" href="DataEntry.html.php"><span class="glyphicon glyphicon-edit"></span> Add Data</a> &nbsp; 
        <a id="navpanel" href="CalendarDisplay.php"><span class="glyphicon glyphicon-calendar"></span> Calendar</a>
        <hr />    
    <table id="entrytbl" class="display" cellspacing="0" width="100%">
                
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#date_ex" ).datepicker();
  });
  </script>

<form action="ActionDataEntry.html.php" method="post">
		        <tr><th><label class="h5"><?php echo $user->name ?></label></th><td><b> Hours Spent:<b></td></tr>
            <tr><th>Gaming: </th> <td><input type="text" value="" name="gaming" required></td></tr>
            <tr><th>Watching Entertainment: </th> <td><input type="text" value="" name="entertainment" required></td></tr>
            <tr><th>Social Media: </th> <td><input type="text" value="" name="socialmedia" required></td></tr>
            <tr><th>Browsing Internet: </th> <td><input type="text" value="" name="internet" required></td></tr>
            <tr><th>Sleep: </th> <td><input type="text" value="" name="sleep" required></td></tr>
            <tr><th>Studying: </th> <td><input type="text" value="" name="study" required></td></tr>
            <tr><th>Work: </th> <td><input type="text" value="" name="work" required></td></tr>
            <tr><th>Date: </th><td><input type="text" id="date_ex" name= "date" value= "" ></td></tr>
          
<progress value="22" max="100"></progress>
                   
		</table>
		<br>
		<center><p><input type="submit" value="Add"/></center>
</form>  
    </div>

</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
 
</body>
</html>