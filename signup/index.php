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
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha256.js"></script>
    <script>
      function validateForm() {
          // Client-side validation
          // This should be 1+2 ie 3
          var answer=document.forms["login"]["answer"].value;
          // The two emails should match
          var email1=document.forms["login"]["email1"].value;
          var email2=document.forms["login"]["email2"].value;
		  //names
		  var firstName=document.forms["login"]["firstName"].value;
		  var lastName=document.forms["login"]["lastName"].value;
          // The two passwords should match
          var password1=document.forms["login"]["password1"].value;
          var password2=document.forms["login"]["password2"].value;
          // Let's find out!
          // This is wall 1.1, client-side data validation
          if ( answer != 3
                   || !email1 || !email2 || email1 != email2
                   || !password1 || !password2 || password1 != password2 || !firstName || !lastName ) {
              // Something not right
              alert("Please check your input values.");
              // We do not contact the server
              return false;
          } else {
              // Here, we're now at wall 1.2, client-side data sanitation.
              // To keep it simple, in this template there is no such wall :-\
              // We're going straight to wall 2, client-server communication.
              // Wall 3 will have to be strong!
              // Ok, let's encrypt the password before we sent it
              document.forms["login"]["encrypted"].value = CryptoJS.SHA256(email1+password1);
              // Ok, let's hide the password
              document.forms["login"]["password1"].value="";
              // and let's remove the redundant values
              document.forms["login"]["email2"].value="";
              document.forms["login"]["password2"].value="";
              // We contact the server
              return true;
          }
      }
    </script>
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

  <p>Sign-up by filling this form.</p>

  <form name="login" action="./result.php" method="post" class="signup" onSubmit="return validateForm()">
    <label>email:</label>
    <input type="text" name="email1" />
    <br/>
    <label>re-enter your email:</label>
    <input type="text" name="email2" />
    <br/>
    <label>First name:</label>
    <input type="text" name="firstName" />
    <br/>
    <label>Last name:</label>
    <input type="text" name="lastName" />
    <br/>
    <label>password:</label>
    <input type="password" name="password1"/>
    <br/>
    <label>re-enter your password:</label>
    <input type="password" name="password2"/>
    <br/>
    <label>what is 1 plus 2:</label>
    <input type="text" name="answer"/>
    <br/>
    <label></label>
    <input type="submit" name="sign up"/>
    <br/>
    <input type="hidden" name="encrypted"/>
  </form>
            </div>
      </div>
    </div>
</body>
</html>