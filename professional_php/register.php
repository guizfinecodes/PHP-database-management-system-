

<?php
        error_reporting(0);//turning off error reporting
        include('connect.php');
        ?>

                <?php
              mysql_select_db('prof',mysql_connect('localhost','root',''))or die(mysql_error());
                 if (isset($_POST['register'])){

        $firstname=strtoupper(addslashes($_POST['firstname']));
        $lastname=strtoupper(addslashes($_POST['lastname']));
        $username=strtoupper(addslashes($_POST['username']));
        $email=strtoupper(addslashes($_POST['email']));
        $password=strtoupper(addslashes($_POST['password']));
        $role=strtoupper(addslashes($_POST['role']));
        $active="1";


mysql_query("INSERT INTO users(firstname,lastname, username, email,password, role, active ) VALUES ('$firstname','$lastname', '$username', '$email','$password' , '$role', '$active')") or die(mysql_error());

  ?>
  <?php 
                        $query="SELECT * FROM users";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQL_ASSOC))
                        {
                        $id = $rec['id'];
                        }?>
                                        
                        <script>
 
                        alert('Succsessfully Registered.');
                        window.location = "login.php?id=<?php echo $id;?>";
                        </script>
<?php }?> 

<!DOCTYPE html>
<html>
<head>
<title>P-FORUM | Pages | register</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css">

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline">
        <li><a href="#"><font color="success">We connect, you gain, everybody wins. let's grow together.</font></a></li>
        <!--<li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        <li><a href="#">Link 5</a></li>-->
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline">
        <li><i class="fa fa-phone"></i> +2547xxxxxxxxxx [KENYA]</li>
        <li><i class="fa fa-envelope-o"></i>guiz.finecodes@gmail.com</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">PROFESSIONALS' FORUM</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li><a href="index.php">Home</a></li>
        <li><a class="drop" href="#">Professionals</a>
          <ul>
            <li><a href="login.php">View Profile</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="pages/contact.php">Contact</a></li>
            <li><a href="login.php">Manage Account</a></li>
            <li><a href="login.php">Update Account</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Employers</a>
          <ul>
            <li><a href="login.php">Account</a></li>
            <li><a class="drop" href="#">Operations</a>
              <ul>
                <li><a href="login.php">View Candidates</a></li>
                <li><a href="login.php">Short-list Candidates</a></li>
                <li><a href="login.php">Contact Candidates</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="pages/about_index.php">About</a></li>
        <li><a href="pages/contact.php">Contact</a></li>
        <li class="active"><a href="login.php">LOGIN</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div id="breadcrumb" class="clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Forum</a></li>
      <li><a href="#">Online</a></li>
      <li><a href="login.php">register</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->

<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
     
      <div class="sdb_holder"> 
        <h4 style="color: green;"><b>pLEASE REGISTER</b></h4><br>
        <article>
         
          <p>For you to use the system you have to register first. Using your username and password you prvided during registration.</p>
          <ul>
            <li>Use a corect unique Username.</li>
            <li>Use a correct password too (Check on uppercases and characters to rememmber).</li>
            <li>register to your Account.</li>
            <li>login and Enjoy...</li>
          </ul>
          <p>The system ensures users integrity and preserves data therefore its safe to use. Lest grow together by connecting each other to the wider markets especially for job seekers. Thank you.</p>
          <!--<p class="more"><a href="#">Continue Reading &raquo;</a></p>-->
        </article>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      
       
      <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 20px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    
    <div class="login-card animate">
      
  

        <form class="form-signin" action="#register.php" method="POST" enctype="multipart/form-data"><span class="reauth-email"> </span>

            <input class="form-control" type="text" required="" placeholder="firstname" name="firstname" autofocus="" id="fname">
            <input class="form-control" type="text" required="" placeholder="lastname" name="lastname" autofocus="" id="lname">
            <input class="form-control" type="text" required="" placeholder="username" name="username" autofocus="" id="sname">
            <input class="form-control" type="email" required="" placeholder="Email" name="email" autofocus="" id="email">
            <input class="form-control" type="password" required="" placeholder="Password" name="password" id="password">
            <p><select name="role" class="form-control" id="position" required="">
                <option value="">--role--</option>
            <option>Professional</option>
            <option>Employer</option>
            <!--<option>Instructor</option>-->
            </select></p>

            <!--<input class="form-control" type="text" required="" placeholder="position" name="username" autofocus="" id="position"> -->

            
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="register">Register</button>
            <button class="btn btn-primary btn-block btn-reset" type="reset" name="Reset">Reset</button>
        </form>
        
</div>
      
</div>

    
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">System Details</h6>
      <address class="btmspace-15">
      Author-guizfinecodes<br>
      guizfinecodes Designs &amp; Development <br>
      nairobi<br>
      Kenya.
      
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><span class="fa fa-phone"></span> +2547 xxxxxx</li>
        <li><span class="fa fa-envelope-o"></span>Email:<a href="#"> guiz.finecodes@gmail.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Quick Links</h6>
      <ul class="nospace linklist">
        <!--<li><a href="#">Home Page</a></li>-->
        <li><a href="login.php">Profile</a></li>
        <li><a href="login.php">get started</a></li>
        <li><a href="pages/about_index.php">about</a></li>
        <li><a href="pages/contact.php">Help</a></li>
        <li><a href="pages/contact.php">contact us</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">From The Author</h6>
      <article>
        <h2 class="nospace"><a href="#">Justification</a></h2>
       <!-- <time class="smallfont" datetime="2045-04-06">As from Monday, 14<sup>th</sup> October 2019</time>-->
        <p>The system ensures user integrity and confidentiality between the professionals' data and the employers searches.</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Keep In Touch</h6>
      <form class="btmspace-30" method="post" action="#">
        <fieldset>
          <h4><font color="success">Our Newsletter:</font></h4>
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a class="faicon-tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p style="text-align: center;">Copyright &copy; Guiz 2019 - All Rights Reserved - <a href="#"><font color="sky blue">guiz.com</font></a></p>
    <!--<p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>-->
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>