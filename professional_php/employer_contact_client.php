
<?php
include('dbconnect.php');
include("connect.php"); 
error_reporting(0);
mysql_select_db('prof', mysql_connect('localhost', 'root', ''))or die(mysql_error());
?>
<!--*****************Analysis data*****************************-->
<?php
SESSION_START();
?>
<?php 
$id = $_GET['id'];
                    $sql ="SELECT  * from users where user_id='$id' ";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $id = $row['user_id'];
                  
                        ?>


<!DOCTYPE html>

<html>
<head>
<title>P-FORUM | contact-client</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

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
        <li><i class="fa fa-phone"></i> +2547xxxxxxx [KENYA]</li>
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
      <h1><a href="employer.php <?php echo '?id='.$id; ?>">PROFESSIONALS' FORUM</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <!--<li ><a href="index.php">Home</a></li>-->
        <li><a  href="employer.php <?php echo '?id='.$id; ?>">Account</a>
          <!--<ul>
            <li><a href="view_profile.php">View Profile</a></li>-->
            <!--<li><a href="register.php">Register</a></li>-->
            <!--<li><a href="pages/contact.php">Contact</a></li>-->
            <!--<li><a href="update_profile.php">update Account</a></li>
            <li><a href="#">manage Account</a></li>
          </ul>-->
        </li>
        <li><a >view profile</a>
          <!--<ul>-->
            <li><a >update</a></li>
            <li class="active"><a href="employer_contact_client.php <?php echo '?id='.$id; ?>">inbox</a>
              <!--<ul>
                <li><a href="login.php">View Candidates</a></li>
                <li><a href="login.php">Short-list Candidates</a></li>
                <li><a href="login.php">Contact Candidates</a></li>
              </ul>-->
            </li>
        
        
        <!--<li><a href="pages/about_index.php">About</a></li>
        <li><a href="index.php">Log Out</a></li>-->
        <li><a class="drop" href="#">Operations <img src="images/img/export2.png"></a>
          <ul>
            <li><a href="index.php">log out</a></li>
            <li><a href="delete_account.php  <?php echo '?id='.$id; ?>">Delete Account</a></li>
            <li><a href="change-password.php">change password</a></li>
            
          </ul>
        </li>

</ul>
</nav>
<!-- The Modal -->




        <!--<li><a href="#">LOGIN</a></li>-->
     
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
     
<li><a >
<?php
        //Check to see if the user is logged in.if not redirect user to the loging page.
        
        if(isset($_SESSION['firstname']))
        { 
        echo   "WELCOME CLIENT: ".$_SESSION['firstname']. "&nbsp;".$_SESSION['lastname']. " ";
        $role=$_SESSION['role'];
        }else{
          echo "<script type='text/javascript'>
                    alert( 'You must Log in to use the system');
                    </script>";
                echo "<script>
                    window.location = 'login.php'
                  </script>";
        }}
        ?>
      </a></li>
     
    </ul>

    
    <!-- ################################################################################################ -->
  </div>
</div>


<!--Section: Testimonials v.1-->


    
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/new/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/new/font-awesome/4.2.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="assets/new/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="assets/new/css/jquery.gritter.min.css" />
    <link rel="stylesheet" href="assets/new/css/select2.min.css" />
    <link rel="stylesheet" href="assets/new/css/datepicker.min.css" />
    <link rel="stylesheet" href="assets/new/css/bootstrap-editable.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/new/fonts/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/new/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/new/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <div id="navbar" class="navbar navbar-default">
      

      <div class="navbar-container" id="navbar-container">

    <div class="main-container" id="main-container">
      


      <div class="main-content">
        <div class="main-content-inner">
          

          <div class="page-content">
<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="clearfix">
                  
								<div class="row">
									<div class="col-xs-12">
										<div class="tabbable">
											<ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
												<li class="li-new-mail pull-right">
													<a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail">
														<span class="btn btn-purple no-border">
															<i class="ace-icon fa fa-envelope bigger-130"></i>
															<span class="bigger-110">Write message</span>
														</span>
													</a>
												</li><!-- /.li-new-mail -->

												<li >
													<a data-toggle="tab" href="#inbox" data-target="inbox">
														<i class="blue ace-icon fa fa-inbox bigger-130"></i>
														<span class="bigger-110">Inbox</span>
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#sent" data-target="sent">
														<i class="orange ace-icon fa fa-location-arrow bigger-130"></i>
														<span class="bigger-110">Sent</span>
														
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#draft" data-target="draft">
														<i class="green ace-icon fa fa-pencil bigger-130"></i>
														<span class="bigger-110">Draft</span>
													</a>
												</li>

												<!--<li class="dropdown">
													<a data-toggle="dropdown" class="dropdown-toggle" href="#">
														<i class="pink ace-icon fa fa-tags bigger-130"></i>

														<span class="bigger-110">
															Tags
															<i class="ace-icon fa fa-caret-down"></i>
														</span>
													</a>

													<ul class="dropdown-menu dropdown-light-blue dropdown-125">
														<li>
															<a data-toggle="tab" href="#tag-1">
																<span class="mail-tag badge badge-pink"></span>
																<span class="pink">Tag#1</span>
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#tag-family">
																<span class="mail-tag badge badge-success"></span>
																<span class="green">Family</span>
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#tag-friends">
																<span class="mail-tag badge badge-info"></span>
																<span class="blue">Friends</span>
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#tag-work">
																<span class="mail-tag badge badge-grey"></span>
																<span class="grey">Work</span>
															</a>
														</li>
													</ul>
												</li>--><!-- /.dropdown -->
											</ul>

											<div class="tab-content no-border no-padding">
												<div id="inbox" class="tab-pane in active">
													<div class="message-container">
														<div id="id-message-list-navbar" class="message-navbar clearfix">
															<div class="message-bar">
																<div class="message-infobar" id="id-message-infobar">
																	<span class="blue bigger-150">Inbox</span>
																	<span class="grey bigger-110">(inbox messages)</span>
																</div>

																<div class="message-toolbar hide">
																	<div class="inline position-relative align-left">
																		<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<span class="bigger-110">Action</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-reply blue"></i>&nbsp; Reply
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-forward green"></i>&nbsp; Forward
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-folder-open orange"></i>&nbsp; Archive
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye blue"></i>&nbsp; Mark as read
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye-slash green"></i>&nbsp; Mark unread
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-flag-o red"></i>&nbsp; Flag
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-trash-o red bigger-110"></i>&nbsp; Delete
																				</a>
																			</li>
																		</ul>
																	</div>

																	<div class="inline position-relative align-left">
																		<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<i class="ace-icon fa fa-folder-o bigger-110 blue"></i>
																			<span class="bigger-110">Move to</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop pink2"></i>&nbsp; Tag#1
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop blue"></i>&nbsp; Family
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop green"></i>&nbsp; Friends
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop grey"></i>&nbsp; Work
																				</a>
																			</li>
																		</ul>
																	</div>

																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-trash-o bigger-125 orange"></i>
																		<span class="bigger-110">Delete</span>
																	</button>
																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<label class="inline middle">
																		<input type="checkbox" id="id-toggle-all" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	&nbsp;
																	<div class="inline position-relative">
																		<a href="#" data-toggle="dropdown" class="dropdown-toggle">
																			<i class="ace-icon fa fa-caret-down bigger-125 middle"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-lighter dropdown-100">
																			<li>
																				<a id="id-select-message-all" href="#">All</a>
																			</li>

																			<li>
																				<a id="id-select-message-none" href="#">None</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a id="id-select-message-unread" href="#">Unread</a>
																			</li>

																			<li>
																				<a id="id-select-message-read" href="#">Read</a>
																			</li>
																		</ul>
																	</div>
																</div>

																<div class="messagebar-item-right">
																	<div class="inline position-relative">
																		<a href="#" data-toggle="dropdown" class="dropdown-toggle">
																			Sort &nbsp;
																			<i class="ace-icon fa fa-caret-down bigger-125"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-lighter dropdown-menu-right dropdown-100">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check green"></i>
																					Date
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check invisible"></i>
																					From
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check invisible"></i>
																					Subject
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>

																<div class="nav-search minimized">
																	<form class="form-search">
																		<span class="input-icon">
																			<input type="text" autocomplete="off" class="input-small nav-search-input" placeholder="Search inbox ..." />
																			<i class="ace-icon fa fa-search nav-search-icon"></i>
																		</span>
																	</form>
																</div>
															</div>
														</div>

														<div id="id-message-item-navbar" class="hide message-navbar clearfix">
															<div class="message-bar">
																<div class="message-toolbar">
																	<div class="inline position-relative align-left">
																		<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<span class="bigger-110">Action</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-reply blue"></i>&nbsp; Reply
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-forward green"></i>&nbsp; Forward
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-folder-open orange"></i>&nbsp; Archive
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye blue"></i>&nbsp; Mark as read
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye-slash green"></i>&nbsp; Mark unread
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-flag-o red"></i>&nbsp; Flag
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-trash-o red bigger-110"></i>&nbsp; Delete
																				</a>
																			</li>
																		</ul>
																	</div>

																	<div class="inline position-relative align-left">
																		<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<i class="ace-icon fa fa-folder-o bigger-110 blue"></i>
																			<span class="bigger-110">Move to</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop pink2"></i>&nbsp; Tag#1
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop blue"></i>&nbsp; Family
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop green"></i>&nbsp; Friends
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop grey"></i>&nbsp; Work
																				</a>
																			</li>
																		</ul>
																	</div>

																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-trash-o bigger-125 orange"></i>
																		<span class="bigger-110">Delete</span>
																	</button>
																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<a href="#" class="btn-back-message-list">
																		<i class="ace-icon fa fa-arrow-left blue bigger-110 middle"></i>
																		<b class="bigger-110 middle">Back</b>
																	</a>
																</div>

																<div class="messagebar-item-right">
																	<i class="ace-icon fa fa-clock-o bigger-110 orange"></i>
																	<span class="grey">Today, 7:15 pm</span>
																</div>
															</div>
														</div>

														<div id="id-message-new-navbar" class="hide message-navbar clearfix">
															<div class="message-bar">
																<div class="message-toolbar">
																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-floppy-o bigger-125"></i>
																		<span class="bigger-110">Save Draft</span>
																	</button>

																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-times bigger-125 orange2"></i>
																		<span class="bigger-110">Discard</span>
																	</button>
																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<a href="#" class="btn-back-message-list">
																		<i class="ace-icon fa fa-arrow-left bigger-110 middle blue"></i>
																		<b class="middle bigger-110">Back</b>
																	</a>
																</div>

																
															</div>
														</div>

														<!--<div class="message-list-container">
															<div class="message-list" id="message-list">
																<div class="message-item message-unread">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star orange2"></i>
																	<span class="sender" title="Alex John Red Smith">Alex John Red Smith </span>
																	<span class="time">1:33 pm</span>

																	<span class="summary">
																		<span class="text">
																			Click to open this message
																		</span>
																	</span>
																</div>

																<div class="message-item message-unread">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>

																	<span class="sender" title="John Doe">
																		John Doe
																		<span class="light-grey">(4)</span>
																	</span>
																	<span class="time">7:15 pm</span>

																	<span class="attachment">
																		<i class="ace-icon fa fa-paperclip"></i>
																	</span>

																	<span class="summary">
																		<span class="badge badge-pink mail-tag"></span>
																		<span class="text">
																			Clik to open this message right here
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Philip Markov">Philip Markov </span>
																	<span class="time">10:15 am</span>

																	<span class="attachment">
																		<i class="ace-icon fa fa-paperclip"></i>
																	</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="ace-icon fa fa-reply light-grey"></i>
																		</span>
																		<span class="text">
																			Photo booth beard raw denim letterpress vegan
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star orange2"></i>
																	<span class="sender" title="Sabrina">Sabrina </span>
																	<span class="time">Yesterday</span>

																	<span class="summary">
																		<span class="text">
																			Nullam quis risus eget urna mollis ornare
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Philip Markov">Philip Markov </span>
																	<span class="time">Yesterday</span>

																	<span class="attachment">
																		<i class="ace-icon fa fa-paperclip"></i>
																	</span>

																	<span class="summary">
																		<span class="badge badge-success mail-tag"></span>
																		<span class="text">
																			Vestibulum id ligula porta felis euismod
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Doctor Gomenz">Doctor Gomenz </span>
																	<span class="time">April 5</span>

																	<span class="summary">
																		<span class="text">
																			Vim te vivendo convenire, summo fuisset
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Robin Hood">Robin Hood </span>
																	<span class="time">April 4</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="ace-icon fa fa-reply light-grey"></i>
																		</span>
																		<span class="text">
																			No eos veniam equidem mentitum, his porro
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Google Inc">Google Inc </span>
																	<span class="time">April 3</span>

																	<span class="summary">
																		<span class="badge badge-grey mail-tag"></span>
																		<span class="text">
																			Convallis facilisis euismod urna sodales
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Shrek">Shrek </span>
																	<span class="time">March 28</span>

																	<span class="attachment">
																		<i class="ace-icon fa fa-paperclip"></i>
																	</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="ace-icon fa fa-flag fa-flip-horizontal light-grey"></i>
																		</span>
																		<span class="text">
																			Photo booth beard raw denim letterpress vegan messenger
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Yahoo!">Yahoo! </span>
																	<span class="time">March 27</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="ace-icon fa fa-mail-forward light-grey"></i>
																		</span>
																		<span class="text">
																			Tofu biodiesel williamsburg marfa, four loko mcsweeney
																		</span>
																	</span>
																</div>
															</div>
														</div>-->

														<!--<div class="message-footer clearfix">
															<div class="pull-left"> 151 messages total </div>

															<div class="pull-right">
																<div class="inline middle"> page 1 of 16 </div>

																&nbsp; &nbsp;
																<ul class="pagination middle">
																	<li class="disabled">
																		<span>
																			<i class="ace-icon fa fa-step-backward middle"></i>
																		</span>
																	</li>

																	<li class="disabled">
																		<span>
																			<i class="ace-icon fa fa-caret-left bigger-140 middle"></i>
																		</span>
																	</li>

																	<li>
																		<span>
																			<input value="1" maxlength="3" type="text" />
																		</span>
																	</li>

																	<li>
																		<a href="#">
																			<i class="ace-icon fa fa-caret-right bigger-140 middle"></i>
																		</a>
																	</li>

																	<li>
																		<a href="#">
																			<i class="ace-icon fa fa-step-forward middle"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>-->

														<div class="hide message-footer message-footer-style2 clearfix">
															<div class="pull-left"> simpler footer </div>

															<div class="pull-right">
																<div class="inline middle"> message 1 of 151 </div>

																&nbsp; &nbsp;
																<ul class="pagination middle">
																	<li class="disabled">
																		<span>
																			<i class="ace-icon fa fa-angle-left bigger-150"></i>
																		</span>
																	</li>

																	<li>
																		<a href="#">
																			<i class="ace-icon fa fa-angle-right bigger-150"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div><!-- /.tab-content -->
										</div><!-- /.tabbable -->
									</div><!-- /.col -->
								</div><!-- /.row -->
<!--<form class="form-horizontal" action="update_file.php" method="post" enctype="multipart/form-data">-->
								<form id="id-message-form" class="hide form-horizontal message-form col-xs-12" action="sent_message.php" method="post" enctype="multipart/form-data">
									<div>

										<?php 
                    
					$id = $_SESSION['user_id'];
                    $sql ="SELECT * from users where user_id='$id' ";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    $num_rows=mysqli_num_rows($user_query);
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $id = $row['user_id'];
                  
                        ?>

                        <?php 
                                  $select="SELECT * FROM users WHERE user_id='$id'";
                                  $result = mysql_fetch_array(mysql_query($select));
                                  $qry=mysql_query($select);
                                      if($qry)
                                      {
                                while($rec = mysql_fetch_array($qry)){
                                	$user_id = "$rec[user_id]";
                                $firstname = "$rec[firstname]";
                                $lastname = "$rec[lastname]";
                                $location = "$rec[location]";
                                $company_type = "$rec[company_type]";
                                $company_name = "$rec[company_name]";
                                $address = "$rec[address]";
                                $email = "$rec[email]";
                                $company_email = "$rec[company_email]";
                                $company_phone = "$rec[company_phone]";
                                $specialisation = "$rec[specialisation]";
                                $company_website = "$rec[company_website]";
                                $information = "$rec[information]";
                                $vacancy = "$rec[vacancy]";
                                //$birthdate = "$rec[birthdate]";
                                //$website = "$rec[website]";
                                //$textarea = "$rec[textarea]";        
                                
                                    
                                 } 
                                 ?>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">company ID:</label>

											<div class="col-sm-6 col-xs-12">
												<div class="input-icon block col-xs-12 no-padding">
													<input type="text" name="sender" class="col-xs-12" id="form-field-recipient" readonly="" required="" data-value="0001"  placeholder="company ID" value="<?php echo $user_id; ?>" />
													<i class="ace-icon fa fa-user"></i>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">company name:</label>

											<div class="col-sm-6 col-xs-12">
												<div class="input-icon block col-xs-12 no-padding">
													<input type="text" name="companyname" class="col-xs-12" id="form-field-recipient" readonly="" required="" data-value="xyz merchants"  placeholder="company name(s)" value="<?php echo $firstname; ?> <?php echo $lastname; ?>, <?php echo $company_name; ?>" />
													<i class="ace-icon fa fa-user"></i>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">company details:</label>

											<div class="col-sm-6 col-xs-12">
												<div class="input-icon block col-xs-12 no-padding">
													<input type="text" name="locations" class="col-xs-12" id="form-field-recipient" required="" data-value="indurstrial area"  placeholder="location" value="<?php echo $location; ?>" /><br><br>
													<span class="input-icon">
													<input type="phone" name="phones" class="col-xs-12" id="form-field-recipient" required="" data-value="indurstrial area"  placeholder="phone" value="<?php echo $company_phone; ?>" /><br><br>
												</span>
													<input type="email" name="emails" class="col-xs-12" id="form-field-recipient" readonly="" required="" data-value="indurstrial area"  placeholder="email" value="<?php echo $email; ?> , <?php echo $company_email; ?>" /><br><br>
													<input type="text" name="addressee" class="col-xs-12" id="form-field-recipient" required="" data-value="indurstrial area"  placeholder="address" value="<?php echo $address; ?>" />

													<i class="ace-icon fa fa-user"></i>
												</div>
											</div>
										</div><br>
										<hr>
									<?php }} ?>
									<?php 
                    
$id = $_GET['id'];
                    $sql ="SELECT  * from users where user_id='$id' ";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $id = $row['user_id'];
                  
                        ?>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:(ID)</label>

											<div class="col-sm-9">
												<span class="input-icon">
													<input type="text" name="recipient" id="form-field-recipient" readonly="" data-value="123@gmail.com" value="<?php echo $id; ?>" placeholder="Recipient(s)" />
													<i class="ace-icon fa fa-user"></i>
												</span>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Subject:</label>

											<div class="col-sm-6 col-xs-12">
												<div class="input-icon block col-xs-12 no-padding">
													<input maxlength="100" type="text" class="col-xs-12" name="subject" id="form-field-subject" placeholder="Subject" />
													<i class="ace-icon fa fa-comment-o"></i>
												</div>
											</div>
										</div>
										<!--<div class="form-group">
										 <label class="col-sm-3 control-label no-padding-right">Date:</label>
										 <div class="col-sm-6 col-xs-12">
												<div class="input-icon block col-xs-12 no-padding">
                               <input type="date"  id="sentdate" name="sentdate" data-value="date" value="<?php echo date("Y-m-d") ;?>" readonly class="form-control">
                           </div></div></div>-->

                           <div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Date</label>

											<div class="col-sm-9">
												<span class="input-icon">
													<input type="date" name="sentdate" id="form-field-recipient" readonly="" data-value="today" value="<?php echo date("Y-m-d"); ?>" placeholder="date" />
													<i class="ace-icon fa fa-clock-o"></i>
												</span>
												<span class="input-icon">
													<input type="time" name="senttime" id="form-field-recipient" readonly="" data-value="time" value="<?php echo date("h:i"); ?>" placeholder="date" />
													<i class="ace-icon fa fa-clock-o"></i>
												</span>
											</div>
										</div>

 
										<div class="hr hr-18 dotted"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right">
												<span class="inline space-24 hidden-480"></span>
												Message:
											</label>

											<!--<div class="col-sm-9">
												<div type="txt" name="notification" class="wysiwyg-editor"/>
											</div>-->
										
										<div class="form-group">
                        <div class="col-sm-6 col-xs-12">
												<div class="input-icon block col-xs-12 no-padding">
  
                            <textarea class="form-control" required="" class="col-xs-12" name="notification" id="exampleFormControlTextarea3"  placeholder="Write your Message here please"  rows="7">
                              </textarea></div>
                          </div></div>


										<div class="hr hr-18 dotted"></div>

										<!--<div class="form-group no-margin-bottom">
											<label class="col-sm-3 control-label no-padding-right">Attachments:</label>

											<div class="col-sm-9">
												<div id="form-attachments">
													<input type="file" name="attachment[]" />
												</div>
											</div>
										</div>-->

										<!--<div class="align-right">
											<button id="id-add-attachment" type="button" class="btn btn-sm btn-danger">
												<i class="ace-icon fa fa-paperclip bigger-140"></i>
												Add Attachment
											</button>
										</div>-->

									</div>
									<br><br>
									<div class="hr hr-18 dotted"></div>
									<div class="messagebar-item-right">
																	<span class="inline btn-send-message">
																		<button type="submit" name="send_message" id="upload" class="btn  btn-primary no-border btn-white btn-round">
																			<span class="bigger-110">Send message</span>

																			<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
																		</button>
																		
																	</span>
																</div>
								</form>


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					<!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="assets/new/js/jquery.2.1.1.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

    <!--[if !IE]> -->
    <script type="text/javascript">
      window.jQuery || document.write("<script src='assets/new/js/jquery.min.js'>"+"<"+"/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='assets/new/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="assets/new/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
      <script src="assets/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="assets/new/js/jquery-ui.custom.min.js"></script>
    <script src="assets/new/js/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/new/js/jquery.gritter.min.js"></script>
    <script src="assets/new/js/bootbox.min.js"></script>
    <script src="assets/new/js/jquery.easypiechart.min.js"></script>
    <script src="assets/new/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/new/js/jquery.hotkeys.min.js"></script>
    <script src="assets/new/js/bootstrap-wysiwyg.min.js"></script>
    <script src="assets/new/js/select2.min.js"></script>
    <script src="assets/new/js/fuelux.spinner.min.js"></script>
    <script src="assets/new/js/bootstrap-editable.min.js"></script>
    <script src="assets/new/js/ace-editable.min.js"></script>
    <script src="assets/new/js/jquery.maskedinput.min.js"></script>

    <!-- page specific plugin scripts -->
		<script src="assets/new/js/bootstrap-tag.min.js"></script>
		<script src="assets/new/js/jquery.hotkeys.min.js"></script>
		<script src="assets/new/js/bootstrap-wysiwyg.min.js"></script>


    <!-- ace scripts -->
    <script src="assets/new/js/ace-elements.min.js"></script>
    <script src="assets/new/js/ace.min.js"></script>

    <script type="text/javascript">
			jQuery(function($){
			
				//handling tabs and loading/displaying relevant messages and forms
				//not needed if using the alternative view, as described in docs
				$('#inbox-tabs a[data-toggle="tab"]').on('show.bs.tab', function (e) {
					var currentTab = $(e.target).data('target');
					if(currentTab == 'write') {
						Inbox.show_form();
					}
					else if(currentTab == 'inbox') {
						Inbox.show_list();
					}
				})
			
			
				
				//basic initializations
				$('.message-list .message-item input[type=checkbox]').removeAttr('checked');
				$('.message-list').on('click', '.message-item input[type=checkbox]' , function() {
					$(this).closest('.message-item').toggleClass('selected');
					if(this.checked) Inbox.display_bar(1);//display action toolbar when a message is selected
					else {
						Inbox.display_bar($('.message-list input[type=checkbox]:checked').length);
						//determine number of selected messages and display/hide action toolbar accordingly
					}		
				});
			
			
				//check/uncheck all messages
				$('#id-toggle-all').removeAttr('checked').on('click', function(){
					if(this.checked) {
						Inbox.select_all();
					} else Inbox.select_none();
				});
				
				//select all
				$('#id-select-message-all').on('click', function(e) {
					e.preventDefault();
					Inbox.select_all();
				});
				
				//select none
				$('#id-select-message-none').on('click', function(e) {
					e.preventDefault();
					Inbox.select_none();
				});
				
				//select read
				$('#id-select-message-read').on('click', function(e) {
					e.preventDefault();
					Inbox.select_read();
				});
			
				//select unread
				$('#id-select-message-unread').on('click', function(e) {
					e.preventDefault();
					Inbox.select_unread();
				});
			
				/////////
			
				//display first message in a new area
				$('.message-list .message-item:eq(0) .text').on('click', function() {
					//show the loading icon
					$('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
					
					$('.message-inline-open').removeClass('message-inline-open').find('.message-content').remove();
			
					var message_list = $(this).closest('.message-list');
			
					$('#inbox-tabs a[href="#inbox"]').parent().removeClass('active');
					//some waiting
					setTimeout(function() {
			
						//hide everything that is after .message-list (which is either .message-content or .message-form)
						message_list.next().addClass('hide');
						$('.message-container').find('.message-loading-overlay').remove();
			
						//close and remove the inline opened message if any!
			
						//hide all navbars
						$('.message-navbar').addClass('hide');
						//now show the navbar for single message item
						$('#id-message-item-navbar').removeClass('hide');
			
						//hide all footers
						$('.message-footer').addClass('hide');
						//now show the alternative footer
						$('.message-footer-style2').removeClass('hide');
						
						
						//move .message-content next to .message-list and hide .message-list
						$('.message-content').removeClass('hide').insertAfter(message_list.addClass('hide'));
			
						//add scrollbars to .message-body
						$('.message-content .message-body').ace_scroll({
							size: 150,
							mouseWheelLock: true,
							styleClass: 'scroll-visible'
						});
			
					}, 500 + parseInt(Math.random() * 500));
				});
			
			
				//display second message right inside the message list
				$('.message-list .message-item:eq(1) .text').on('click', function(){
					var message = $(this).closest('.message-item');
			
					//if message is open, then close it
					if(message.hasClass('message-inline-open')) {
						message.removeClass('message-inline-open').find('.message-content').remove();
						return;
					}
			
					$('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
					setTimeout(function() {
						$('.message-container').find('.message-loading-overlay').remove();
						message
							.addClass('message-inline-open')
							.append('<div class="message-content" />')
						var content = message.find('.message-content:last').html( $('#id-message-content').html() );
			
						//remove scrollbar elements
						content.find('.scroll-track').remove();
						content.find('.scroll-content').children().unwrap();
						
						content.find('.message-body').ace_scroll({
							size: 150,
							mouseWheelLock: true,
							styleClass: 'scroll-visible'
						});
				
					}, 500 + parseInt(Math.random() * 500));
					
				});
			
			
			
				//back to message list
				$('.btn-back-message-list').on('click', function(e) {
					
					e.preventDefault();
					$('#inbox-tabs a[href="#inbox"]').tab('show');
				});
			
			
			
				//hide message list and display new message form
				/**
				$('.btn-new-mail').on('click', function(e){
					e.preventDefault();
					Inbox.show_form();
				});
				*/
			
			
			
			
				var Inbox = {
					//displays a toolbar according to the number of selected messages
					display_bar : function (count) {
						if(count == 0) {
							$('#id-toggle-all').removeAttr('checked');
							$('#id-message-list-navbar .message-toolbar').addClass('hide');
							$('#id-message-list-navbar .message-infobar').removeClass('hide');
						}
						else {
							$('#id-message-list-navbar .message-infobar').addClass('hide');
							$('#id-message-list-navbar .message-toolbar').removeClass('hide');
						}
					}
					,
					select_all : function() {
						var count = 0;
						$('.message-item input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});
						
						$('#id-toggle-all').get(0).checked = true;
						
						Inbox.display_bar(count);
					}
					,
					select_none : function() {
						$('.message-item input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
						$('#id-toggle-all').get(0).checked = false;
						
						Inbox.display_bar(0);
					}
					,
					select_read : function() {
						$('.message-unread input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
						
						var count = 0;
						$('.message-item:not(.message-unread) input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});
						Inbox.display_bar(count);
					}
					,
					select_unread : function() {
						$('.message-item:not(.message-unread) input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
						
						var count = 0;
						$('.message-unread input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});
						
						Inbox.display_bar(count);
					}
				}
			
				//show message list (back from writing mail or reading a message)
				Inbox.show_list = function() {
					$('.message-navbar').addClass('hide');
					$('#id-message-list-navbar').removeClass('hide');
			
					$('.message-footer').addClass('hide');
					$('.message-footer:not(.message-footer-style2)').removeClass('hide');
			
					$('.message-list').removeClass('hide').next().addClass('hide');
					//hide the message item / new message window and go back to list
				}
			
				//show write mail form
				Inbox.show_form = function() {
					if($('.message-form').is(':visible')) return;
					if(!form_initialized) {
						initialize_form();
					}
					
					
					var message = $('.message-list');
					$('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
					
					setTimeout(function() {
						message.next().addClass('hide');
						
						$('.message-container').find('.message-loading-overlay').remove();
						
						$('.message-list').addClass('hide');
						$('.message-footer').addClass('hide');
						$('.message-form').removeClass('hide').insertAfter('.message-list');
						
						$('.message-navbar').addClass('hide');
						$('#id-message-new-navbar').removeClass('hide');
						
						
						//reset form??
						$('.message-form .wysiwyg-editor').empty();
					
						$('.message-form .ace-file-input').closest('.file-input-container:not(:first-child)').remove();
						$('.message-form input[type=file]').ace_file_input('reset_input');
						
						$('.message-form').get(0).reset();
						
					}, 300 + parseInt(Math.random() * 300));
				}
			
			
			
			
				var form_initialized = false;
				function initialize_form() {
					if(form_initialized) return;
					form_initialized = true;
					
					//intialize wysiwyg editor
					$('.message-form .wysiwyg-editor').ace_wysiwyg({
						toolbar:
						[
							'bold',
							'italic',
							'strikethrough',
							'underline',
							null,
							'justifyleft',
							'justifycenter',
							'justifyright',
							null,
							'createLink',
							'unlink',
							null,
							'undo',
							'redo'
						]
					}).prev().addClass('wysiwyg-style1');
			
			
			
					//file input
					$('.message-form input[type=file]').ace_file_input()
					.closest('.ace-file-input')
					.addClass('width-90 inline')
					.wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>');
			
					//Add Attachment
					//the button to add a new file input
					$('#id-add-attachment')
					.on('click', function(){
						var file = $('<input type="file" name="attachment[]" />').appendTo('#form-attachments');
						file.ace_file_input();
						
						file.closest('.ace-file-input')
						.addClass('width-90 inline')
						.wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>')
						.parent().append('<div class="action-buttons pull-right col-xs-1">\
							<a href="#" data-action="delete" class="middle">\
								<i class="ace-icon fa fa-trash-o red bigger-130 middle"></i>\
							</a>\
						</div>')
						.find('a[data-action=delete]').on('click', function(e){
							//the button that removes the newly inserted file input
							e.preventDefault();
							$(this).closest('.file-input-container').hide(300, function(){ $(this).remove() });
						});
					});
				}//initialize_form
			
				//turn the recipient field into a tag input field!
				/**	
				var tag_input = $('#form-field-recipient');
				try { 
					tag_input.tag({placeholder:tag_input.attr('placeholder')});
				} catch(e) {}
			
			
				//and add form reset functionality
				$('#id-message-form').on('reset', function(){
					$('.message-form .message-body').empty();
					
					$('.message-form .ace-file-input:not(:first-child)').remove();
					$('.message-form input[type=file]').ace_file_input('reset_input_ui');
			
					var val = tag_input.data('value');
					tag_input.parent().find('.tag').remove();
					$(val.split(',')).each(function(k,v){
						tag_input.before('<span class="tag">'+v+'<button class="close" type="button">&times;</button></span>');
					});
				});
				*/
			
			});
		</script>
	</body>
</html>
<?php } ?>
