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
        <br>
        <h2>Tracking performance of your day to day activities</h2>

        <p class="h4">This site contains is for recording information on how well you balance you life around all things and always a way of checking track of yourself to see if you're on target for what your goals are to achieve each day, week month, year.</p>
        <br>
        <h3>Important Stuff....</h3>
        <p class="h4">Lyft cronut jean shorts pinterest. Hell of taxidermy slow-carb DIY, cray kale chips thundercats bitters. Hella intelligentsia succulents drinking vinegar squid street art four dollar toast letterpress locavore art party woke, paleo VHS retro. Kogi shabby chic chia, marfa stumptown aesthetic poutine cronut jean shorts la croix succulents pickled. Helvetica echo park butcher shoreditch mustache. Leggings salvia hammock man bun pinterest blog. Gastropub chia crucifix fanny pack, subway tile venmo selfies succulents VHS normcore roof party pour-over.</p><br>

        <p class="h4">Blue bottle kogi offal glossier etsy, retro paleo waistcoat vegan. Dreamcatcher disrupt before they sold out, gluten-free semiotics poutine four loko shoreditch hoodie. Chia woke mlkshk chicharrones kale chips. Blog brunch hexagon, wayfarers meditation green juice church-key readymade taxidermy. Microdosing sustainable fanny pack snackwave hammock, brunch pork belly tote bag wayfarers pug butcher art party. Photo booth tilde keytar green juice flexitarian, locavore selfies church-key. Plaid gastropub PBR&B fap umami leggings. Snackwave cronut tofu, whatever raw denim scenester jianbing craft beer af pour-over portland mustache seitan YOLO.</p><br> 

        <p class="h4">Poutine subway tile copper mug, hoodie chia meditation schlitz kombucha cray meh 90's four dollar toast. Succulents pork belly readymade glossier, waistcoat af sartorial bitters photo booth heirloom ramps pinterest. Actually jianbing literally, next level four dollar toast af cornhole beard poke. Lomo try-hard flannel XOXO, fixie church-key bicycle rights salvia direct trade narwhal paleo. Jean shorts waistcoat cornhole green juice. Freegan tote bag man bun subway tile, normcore etsy church-key messenger bag ennui. Brooklyn beard ethical, seitan taxidermy pop-up viral hell of you probably haven't heard of them hot chicken neutra. Neutra lo-fi woke, hexagon blue bottle four loko forage roof party art party yuccie try-hard vexillologist dreamcatcher readymade. Ethical master cleanse hella whatever lo-fi, literally banjo semiotics fixie poutine deep v trust fund. Hammock affogato four loko chia. Copper mug ethical semiotics fanny pack microdosing fingerstache. Bushwick yr marfa crucifix ugh.</p><br> 

        <p class="h4">Etsy iPhone banjo, fap organic pok pok gluten-free cornhole tattooed health goth squid. Paleo actually mixtape cliche chicharrones helvetica. YOLO iceland unicorn meggings, hexagon cray vinyl tousled post-ironic. Kale chips la croix lomo enamel pin bespoke, godard twee pork belly brooklyn. Photo booth tilde keytar green juice flexitarian, locavore selfies church-key. Plaid gastropub PBR&B fap umami leggings. Snackwave cronut tofu, whatever raw denim scenester jianbing craft beer af pour-over portland mustache seitan YOLO.</p><br> 

        <p class="h4">Poutine subway tile copper mug, hoodie chia meditation schlitz kombucha cray meh 90's four dollar toast. Succulents pork belly readymade glossier, waistcoat af sartorial bitters photo booth heirloom ramps pinterest. Actually jianbing literally, next level four dollar toast af cornhole beard poke. Lomo try-hard flannel XOXO, fixie church-key bicycle rights salvia direct trade narwhal paleo. Jean shorts waistcoat cornhole green juice.</p><br> 

        <p class="h4">8-bit next level green juice copper mug try-hard. Typewriter succulents slow-carb gentrify, thundercats beard godard. Paleo biodiesel offal, succulents venmo waistcoat green juice humblebrag air plant farm-to-table. YOLO bespoke swag meditation seitan vaporware bicycle rights, enamel pin knausgaard marfa heirloom mixtape before they sold out meh irony. Leggings synth authentic lomo, 90's tote bag narwhal brooklyn prism heirloom lumbersexual marfa flexitarian. Thundercats blue bottle swag next level, slow-carb succulents tilde raclette selvage PBR&B fap hammock. Godard fashion axe pinterest iPhone health goth raclette, mumblecore austin brunch trust fund.</p><br> 
    </div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>