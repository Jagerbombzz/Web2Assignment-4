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

 <head>
 <h2>Progress of </h2>
<progress id="progress-bar" value="22" max="100"></progress>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day [Monday - Sunday]');
      data.addColumn('number', '<?php echo $user->name ?>');
      data.addColumn('number', 'Target');

      data.addRows([
        [1, 2, 2.5],
        [2, 2, 1],
        [3, 2, 1.5],
        [4, 2, 3],
        [5, 2, 1],
        [6, 2, 2],  
        [7, 2, 2]
      ]);

      var options = {
        chart: {
          title: 'Sleep of <?php echo $user->name ?>  vs Target',
          subtitle: 'last 7 days'
        },
        width: 1000,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));
      chart.draw(data, options);
    }
  </script>
<body>
  <div id="line_top_x"></div>
</body>
        
  </body>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
