
<?php
require "config.php";
if(!Session::get("status")||Session::get("status")!=1){
header ("location: index.html");  
    }
    ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>4screen</title>
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'/>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrapper">
  <div class="logo-menu-container">
    <div class="logo">4screen</div>
    <div class="menu">  
    	<ul>
        <li><a href="logout.php" >logout</a></li>
        
      </ul>
    </div>
  </div>
  <div class="searchform-container">
  <div class="clear"></div>
  <div class="page">
    <div class="main-banner"><img src="images/naslovna.jpg" alt="banner" /></div>
    <div class="clear"></div>
	<br /><br /><br /><br /><br />
	<h1 align=center></h1>
	<br /><br />
	<div align=center>
	<html>
<body>
<div class="container">

 <form action="" method="get">
   <input type="hidden" name="page" value="4" />
   <div>
  
    
    <?php
    require_once "config.php";
    $users = User::getAll();
    foreach($users as $rw){ ?>
      <?php } ?>  
    
     </div>
    <br />
      <div>
        <input type="text" name="search" class="text" size="30" placeholder="SEARCH" />
    <input  value="Search"  type="submit" style="width:60px;height:17px;border:none;background-image;url(images/btn_submit_button.jpg)" />
    </div>
    </form>

    </div>
</body>
</html>
	</div>
	<br /><br /><br /><br /><br />
</body>
</html>
