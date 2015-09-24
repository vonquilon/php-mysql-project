<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Geo Car Rentals Homepage</title>
<link href="../css/header.css" rel="stylesheet" type="text/css" />
<link href="../css/contain960.css" rel="stylesheet" type="text/css" />
<link href="../css/ul.css" rel="stylesheet" type="text/css" />
<link href="../css/li.css" rel="stylesheet" type="text/css" />
<link href="../css/leftpanel.css" rel="stylesheet" type="text/css" />
<link href="../css/splash.css" rel="stylesheet" type="text/css" />
<link href="../css/arialfont.css" rel="stylesheet" type="text/css" />
<link href="../css/rightpanel.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #000000;
}
-->
</style>
</head>

<body>
	<div id="header">
    	<div class="contain960">
        	<a href="http://geocarrentals.site40.net/">
            	<img src="../images/Geo.png" alt="GeoCarRentals.com" style="border:none"/>
            </a>
            <ul class="ul">
            	<li class="li">
            		<a href="http://geocarrentals.site40.net/">
                   		<img src="../images/Home.png" alt="Home" style="border:none"/>
                  	</a>
                 </li>
                 <li class="li">
            		<a href="http://geocarrentals.site40.net/about">
                   		<img src="../images/About.png" alt="About" style="border:none"/>
                   	</a>
                 </li>
                 <li class="li">
            		<a href="http://geocarrentals.site40.net/locations">
                   		<img src="../images/Locations.png" alt="Locations" style="border:none"/>
                    </a>
                 </li>
                 <li class="li">
            		<a href="http://geocarrentals.site40.net/cars">
                   		<img src="../images/Cars.png" alt="Cars" style="border:none"/>
                    </a>
                 </li>
            </ul>
        </div>	
    </div>
    
    <div id="splash">
    	<div class="contain960">
        	<div id="leftpanel">
        	  
        	</div>
            
            <div id="rightpanel">
            	<h1>Sign-up for new users</h1>


  <?php
    $email = $_POST['email1'];
    $password = $_POST['encrypted'];

    // Wall 3: Server-side validation
    // Wall 3.1: data validation
    if (filter_var($email, FILTER_VALIDATE_EMAIL)
        && ctype_alnum($password)) {

          // ok, we now move to
          // Wall 3.2, data sanitation
          // hmm, ok, not much to do here, we have a valid email and an alpha-numeric password
          // We'll just make sure they are SQL-clean
          require_once('../../connectionvars.php');
          $connection = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database)
                        or die('connection error');
          $email = mysqli_real_escape_string($connection, $email);
          $password = mysqli_real_escape_string($connection, $password);
		  $firstName = mysqli_real_escape_string($connection, $firstName);
		  $lastName = mysqli_real_escape_string($connection, $lastName);
          // Check if the email is already used.
          $query = "SELECT email FROM users WHERE email = ?";
          $prepared = mysqli_prepare($connection, $query);
          mysqli_stmt_bind_param($prepared, "s", $email);
          mysqli_stmt_execute($prepared);
          mysqli_stmt_store_result($prepared);
          // retrieve the number of rows only
          $nbRows = mysqli_stmt_num_rows($prepared);
          mysqli_stmt_close($prepared);
          if ($nbRows <= 0) {
              // ok, the email is not used yet apparently, so let's insert it.
              $salt = mt_rand();
              $saltedPassword = hash('sha256', $password . $salt);
              $query = "INSERT INTO users (firstName, lastName, email, userPassword, salt) VALUES (?,?,?,?,?)";
              $prepared = mysqli_prepare($connection, $query);
              mysqli_stmt_bind_param($prepared, "sssss", $firstName, $lastName, $email, $saltedPassword, $salt);
              mysqli_stmt_execute($prepared);
              $nbRows = mysqli_stmt_affected_rows($prepared);
              mysqli_stmt_close($prepared);
              if ($nbRows >= 1) {
                  // The insert succeeded apparently.
                  echo "<p>Your account was created. Please log in.";
              } else {
                  // The insert failed.
                  echo "<p>Something unexpected happened.</p>";
                  echo "<p><a href='./index.php'>Back to sign-up</a></p>";
              }
          } else {
              echo "<p>Sorry, email already used.</p>";
              echo "<p><a href='./index.php'>Back to sign-up</a></p>";
          }
    } else {
        echo "<p>There was an error with your input values, please try again</p>";
        echo "<p><a href='./index.php'>Back to sign-up</a></p>";
    }
  ?>
            </div>
      </div>
    </div>
</body>
</html>