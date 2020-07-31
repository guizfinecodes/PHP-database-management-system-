<?php

session_start();

require 'dbconnect.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>MMUST Workstudy login</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" href="assets/img/MMUST.jpg">
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    

</head>

<body class="login-layout">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>
                                <div class="center">
                                    <img src="assets/img/MMUST.jpg" class="img-fluid img-rounded" height="30%"
                                        width="50%">
                                </div>
                                <span class="blue"><b>MMUST</b></span>
                                <span class="white" id="id-text2">WORKSTUDY</span>
                            </h1>
                            <h4 class="blue" id="id-company-text"> Apllication Assistant</h4>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <?php
                        if(isset($_POST['login'])) {
                        $regno=$_POST['regno'];
                        $password=$_POST['password'];

                       $sql="SELECT * FROM students WHERE regno='$regno' AND password='$password'";
                       $result=$conn->query($sql);
                       if($result->num_rows >0){

                       $_SESSION['students']=$regno;
                       //$_SESSION['role_session']=$row['role_id'];
                       $_SESSION['logged-in']=true;
                       echo"<script>window.location.href='home.php';</script>";
                       exit;
                      }
                      else{
                       echo "<div class='alert alert-danger'>login Failed!!! incorrect Details";
                       echo "</div>";
                    }
                   }

                         ?>
                                        <h4 class="header blue lighter bigger">
                                            <i class="ace-icon fa fa-graduation-cap"></i>
                                           <b> Student Login</b>
                                        </h4>

                                        <div class="space-6"></div>

                                        <form action="" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" name="regno" class="form-control"
                                                            required="required"
                                                            placeholder="Enter Registration Number" />
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" class="form-control" required="required"
                                                            name="password" placeholder="Enter Your Password " />
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                                </label>

                                                <div class="space"></div>
                                                <div class="clearfix">
                                                    <label class="inline">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Remember Me</span>
                                                    </label>

                                                    <button type="submit" name="login"
                                                        class="width-35 pull-right btn btn-sm btn-primary">
                                                        <i class="ace-icon fa fa-key"></i>
                                                        <span class="bigger-110">Login</span>
                                                    </button>
                                                </div>
                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>

                                        <div class="social-or-login center">
                                            <span class="bigger-110">Or Login As</span>
                                        </div>

                                        <div class="space-6"></div>

                                        <div class="social-login center">

                                            <a href="adminlogin.php"> <button type="" name="admin"
                                                    class="width-35 btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-user"></i>
                                                    <span class="bigger-110">Admin</span>
                                                </button>
                                            </a>

                                        </div>
                                    </div><!-- /.widget-main -->

                                    <div class="toolbar clearfix">
                                        <div>
                                            <a href="forgot.php" class="forgot-password-link">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                I forgot my password
                                            </a>
                                        </div>

                                        <div>
                                            <a href="register.php" class="user-signup-link">
                                                I want to register
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.login-box -->

                        </div><!-- /.widget-body -->
                    </div><!-- /.forgot-box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.main-content -->
</body>

</html>