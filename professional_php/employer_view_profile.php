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
                    $num_rows=mysqli_num_rows($user_query);
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $id = $row['user_id'];
                    //$textarea= $row['textarea'];
                  
                       } ?>

                        <?php
$id = $_GET['id'];
    $select = "SELECT * FROM users WHERE user_id='$id'";
    $result = mysql_fetch_array(mysql_query($select));
    $qry=mysql_query($select);
        if($qry)
        {
        while($rec = mysql_fetch_array($qry)){
            $firstname = "$rec[firstname]";
            $lastname = "$rec[lastname]";
            $username = "$rec[username]";
            $email = "$rec[email]";
            $phone = "$rec[phone]";
            $gender = "$rec[gender]";
            $nationality = "$rec[nationality]";
            $county = "$rec[county]";
            $education = "$rec[education]";
            $age = "$rec[age]";
            
            $birthdate = "$rec[birthdate]";
            $website = "$rec[website]";
            $textarea = "$rec[textarea]";
            $profession = "$rec[profession]";
            $status = "$rec[status]";
            
            }
        }
  ?>
   


<!DOCTYPE html>

<html>
<head>
<title>P-FORUM | view clients</title>
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
        <li><a> profile update</a></li>
          <!--<ul>-->
            <li class="active"><a >view clients</a></li>
            <li><a>Change password</a>
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
        echo   "WELCOME: ".$_SESSION['firstname']. "&nbsp;".$_SESSION['lastname']. " ";
        $role=$_SESSION['role'];
        }else{
          echo "<script type='text/javascript'>
                    alert( 'You must Log in to use the system');
                    </script>";
                echo "<script>
                    window.location = 'login.php'
                  </script>";
        }
        ?>
      </a></li>
     
    </ul>

    
    <!-- ################################################################################################ -->
  </div>
</div>
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

		
		<script src="assets/new/js/ace-extra.min.js"></script>


<div>
									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
											

											<div class="space"></div>

<form class="form-horizontal" action="update_file.php" method="post" enctype="multipart/form-data">


											
												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic">
																<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
																client Basic Info
															</a>
														</li>

														
													</ul>

													<div class="tab-content profile-edit-tab-content">
														<div id="edit-basic" class="tab-pane in active">
						
                              

                              <div class="form-group">
                                <label class=" control-label no-padding-right" for="form-field-comment"><font color="green"><u><h2>Description about client and other skills aquired</h2></u></font></label>

                                <!--<div class="col-sm-9">
                                  <textarea id="form-field-comment"></textarea>
                                </div>-->
                              </div>
                              
															<div class="row">
																<div class="col-xs-12 col-sm-4">

                                <h4 class="header blue bolder smaller">Contact</h4>
                                <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

                                <div class="col-sm-9">
                                  <span class="input-icon input-icon-right">
                                    <input type="email" id="form-field-email" readonly="" value="<?php echo $email; ?>" />
                                    <i class="ace-icon fa fa-envelope"></i>
                                  </span>
                                </div>
                              </div>

                              <div class="space-4"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"  for="form-field-website">Website</label>

                                <div class="col-sm-9">
                                  <span class="input-icon input-icon-right">
                                    <input type="url" id="form-field-website" readonly="" value="<?php echo $website; ?>" />
                                    <i class="ace-icon fa fa-globe"></i>
                                  </span>
                                </div>
                              </div>

                              <div class="space-4"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

                                <div class="col-sm-9">
                                  <span class="input-icon input-icon-right">
                                    <input  readonly="" value="<?php echo $phone; ?>" type="text" id="form-field-phone" />
                                    <i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
                                  </span>
                                </div>
                              </div>

                              <div class="space"></div>
                              <h4 class="header blue bolder smaller">Social</h4>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>

                                <div class="col-sm-9">
                                  <span class="input-icon">
                                    <input type="text" readonly="" placeholder ="facebook_1234" id="form-field-facebook" />
                                    <i class="ace-icon fa fa-facebook blue"></i>
                                  </span>
                                </div>
                              </div>

                              <div class="space-4"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>

                                <div class="col-sm-9">
                                  <span class="input-icon">
                                    <input type="text" readonly="" placeholder="twitter_1234" id="form-field-twitter" />
                                    <i class="ace-icon fa fa-twitter light-blue"></i>
                                  </span>
                                </div>
                              </div>

                              <div class="space-4"></div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>

                                <div class="col-sm-9">
                                  <span class="input-icon">
                                    <input type="text" readonly="" placeholder="google_1234" id="form-field-gplus" />
                                    <i class="ace-icon fa fa-google-plus red"></i>
                                  </span>
                                </div>
                              </div>

                              <div class="space"></div>
                              <h4 class="header blue bolder smaller">DESCRIPTION</h4>

                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                VIEW DESCRIPTION ABOUT THE CLIENT
              </button>


 

																	
																

                        <div class="space-4"></div>




															

                    </div>

																<div class="vspace-12-sm"></div>


																<div class="col-xs-12 col-sm-8">
                                  <h4 class="header blue bolder smaller"> PERSONNAL INFORMATION </h4>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">firstname</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" name="firstname" type="text" readonly="" id="form-field-username" placeholder="firstname" value="<?php echo $firstname; ?>" />
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">lastname</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" name="lastname" type="text" readonly="" id="form-field-username" placeholder="lastname" value="<?php echo $lastname; ?>" />
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" name="username" readonly="" id="form-field-username" placeholder="Username" value="<?php echo $username; ?>" />
																		</div>
																	</div>
																	
																	
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">gender</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" name="gender" readonly="" id="form-field-username" placeholder="gender" value="<?php echo $gender; ?>" />
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">nationality</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" name="nationality" readonly="" id="form-field-username" placeholder="nationality" value=" <?php echo $nationality; ?>" />
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">County</label>

																		<div class="col-sm-8">

																			<input class="col-xs-12 col-sm-10" type="text" readonly="" name="county" id="form-field-username" placeholder="County" value="<?php echo $county; ?>" />
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Highest level of education</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" name="education" readonly="" id="form-field-username" placeholder="education" value="<?php echo $education; ?>" />
																		</div>
																	</div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-username">Profession</label>

                                    <div class="col-sm-8">
                                      <input class="col-xs-12 col-sm-10" type="text" name="profession" readonly="" id="form-field-username" placeholder="profession" value="<?php echo $profession; ?>" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-username">Status</label>

                                    <div class="col-sm-8">
                                      <input class="col-xs-12 col-sm-10" type="text" name="status" readonly="" id="form-field-username" placeholder="status" value="<?php echo $status; ?>" />
                                    </div>
                                  </div>
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">age</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" name="age" readonly="" id="form-field-username" placeholder="age" value="<?php echo $age; ?>" />
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">date of birth</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" name="birthdate" readonly="" id="form-field-username" placeholder="birthdate" value="<?php echo $birthdate; ?>" />
																		</div>
																	</div>

																	<div class="space-4"></div>

																	</div>
																</div>
															</div>

															<hr />
														

															

															

              <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">DESCRIPTION ABOUT CLIENT:</h4>
              </div>
              <div class="modal-body">
                <span class="green"><?php 
                                  $select="SELECT * FROM users WHERE user_id='$id'";
                                  $result = mysql_fetch_array(mysql_query($select));
                                  $qry=mysql_query($select);
                                      if($qry)
                                      {
                                      while($rec = mysql_fetch_array($qry)){
                                          
                                $textarea = "$rec[textarea]";
                                    
                                 } 
                                 ?>
                               <?php echo $textarea;
                                } ?>
                                   
                                 </span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
         
          <!-- /.modal-dialog -->
</div>
</div>


<form class="form-horizontal" action="send_message.php" method="post" enctype="multipart/form-data">
<div class="modal modal-info fade" id="modal-info1" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">CONTACT CLIENT:</h4>
              </div>
              <div class="modal-body">

                <label>user idno:</label>
                                <input type="text" name="user_id" id="user_id" readonly value="<?php echo $id?>" class="form-control">
                <span class="green">
                  

<!--<form id="id-message-form" class="hide form-horizontal message-form col-xs-12">-->
                  <div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">company name:</label>

                      <div class="col-sm-9">
                        <span class="input-icon">
                          <input type="email" name="companyname" id="form-field-recipient" data-value="company name" required="" placeholder="your company name(s)" />
                          <i class="ace-icon fa fa-user"></i>
                        </span>
                      </div>
                    </div>
                    <div class="hr hr-18 dotted"></div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:</label>

                      <div class="col-sm-9">
                        <span class="input-icon">
                          <input type="email" name="recipient" id="form-field-recipient" required="" data-value="123@gmail.com" value="<?php echo $email?>" placeholder="Recipient(s)" />
                          <i class="ace-icon fa fa-user"></i>
                        </span>
                      </div>
                    </div>

                    <div class="hr hr-18 dotted"></div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">subject:</label>

                      <div class="col-sm-9">
                        <span class="input-icon">
                          <input maxlength="100" type="text" class="col-xs-12" name="subject" id="form-field-subject" placeholder="Subject" />
                          <i class="ace-icon fa fa-comment-o"></i>
                        </span>
                      </div>
                    </div>

                    

                    <div class="hr hr-18 dotted"></div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right">
                        <span class="inline space-24 hidden-480"></span>
                        Message:
                      </label>
                      <div class="form-group">
                        <span class="input-icon">
  
                            <textarea class="form-control" required="" class="col-xs-12" name="notification" id="exampleFormControlTextarea3"  placeholder="Write your Message here please"  rows="7">
                              </textarea></span>
                          </div>

                      <!--<div class="col-sm-9">
                        <div class="wysiwyg-editor"></div>
                      </div>-->
                    </div>

                    <div class="hr hr-18 dotted"></div>

                    <!--<div class="form-group no-margin-bottom">
                      <label class="col-sm-3 control-label no-padding-right">Attachments:</label>

                      <div class="col-sm-9">
                        <div id="form-attachments">
                          <input type="file" name="attachment[]" />
                        </div>
                      </div>
                    </div>

                    <div class="align-right">
                      <button id="id-add-attachment" type="button" class="btn btn-sm btn-danger">
                        <i class="ace-icon fa fa-paperclip bigger-140"></i>
                        Add Attachment
                      </button>
                    </div>-->

                    <div class="space"></div>
                  </div>
                </form>

                                 </span>

                                 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" name="upload" id="upload" value="Save Record" class="btn btn-success btn-labeled">Send massage<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
              </div>


            </div>
            <!-- /.modal-content -->
         
          <!-- /.modal-dialog -->
</div>
</div>




<hr>
<div class="table-responsive">
                                <h4 class="header blue bolder smaller">View client uploaded files</h4>
                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example" width="30" style="background-color: white;">
                                    
                                        <thead>
                                           
   
    
                                          <tr>
                                                <th></th>
                                                <th><center>FILE</center></th>
                                                <th><center>TYPE</center></th>
                                                <th><center>SIZE<br>(in KB)</center></th>
                                                
                                                <th><center>View</center></th>
                                                <!--<th><center>Delete</center></th>-->
                                                <script src="assets/js/jquery.dataTables.min.js"></script>
                                                <script src="assets/js/DT_bootstrap.js"></script>
                                                
                                           </tr>
                                        </thead>
                                        <tbody>
                                <?php 
                                $sql ="SELECT  * from files where user_id='$id'";
                                $user_query=mysqli_query($db,$sql) or die("error getting data");
                                $num_rows=mysqli_num_rows($user_query);
                                echo " $num_rows uploaded files found"; 
                                while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                                $id = $row['file_id'];
                  
                                 ?>
                                                <tr>
                                                <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="radio" value="<?php echo $id; ?>">
                                                </td>
                                                <td><center><?php echo $row['file'] ?></center></td>
                                                <td><center><?php echo $row['type']; ?></center></td>
                                                
                                                <td><center><?php echo $row['size']; ?></center></td>

                                               

                                                
                                                
                                                <td>
                                                <center><a href="uploads/<?php echo $row['file'] ?>" target="_blank" class="btn btn-info" class="glyphicon glyphicon-check">View file</a></center></td>
                                                
                                               <!-- <td><center><a onclick='return confirmDelete()' href="delete_file.php <?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash" name="delete"></i>delete</a></center></td>-->
                                                
                                                
                                                </tr>
                                                 <?php } ?>
                                        </tbody>
                                        <script type='text/javascript'> function confirmDelete() { return confirm("Are you sure you want to delete this?"); } </script>
                                    </table></div>


<div class="space"></div>
                             <!-- <h4 class="header blue bolder smaller">CONTACT THE CLIENT</h4>-->

                              <!--<button type="button" class="btn btn-info" data-toggle="modal" >
                please click to contact candidate
              </button>-->
              <!--<a href="employer_contact_client.php <?php echo '?id='.$id; ?>" class="btn btn-info" class="glyphicon glyphicon-check">please click to contact candidate</a>-->


														
												

												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														
														&nbsp; &nbsp;
														<!--<button class="btn" type="reset">
															<i class="ace-icon fa fa-undo bigger-110"></i>
															Reset
														</button>-->
                            
													</div>
												</div>
                      </form>
											
										</div><!-- /.span -->
									</div><!-- /.user-profile -->
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			     
    </div><!-- /.main-container -->

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

    <!-- ace scripts -->
    <script src="assets/new/js/ace-elements.min.js"></script>
    <script src="assets/new/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
      jQuery(function($) {
      
        //editables on first profile page
        $.fn.editable.defaults.mode = 'inline';
        $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
          $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
                                      '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    
        
        //editables 
        
        //text editable
          $('#username')
        .editable({
          type: 'text',
          name: 'username'
          });
      
      
        
        //select2 editable
        var countries = [];
          $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
              countries.push({id: k, text: v});
          });
      
        var cities = [];
        cities["CA"] = [];
        $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
          cities["CA"].push({id: v, text: v});
        });
        cities["IN"] = [];
        $.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
          cities["IN"].push({id: v, text: v});
        });
        cities["NL"] = [];
        $.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
          cities["NL"].push({id: v, text: v});
        });
        cities["TR"] = [];
        $.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
          cities["TR"].push({id: v, text: v});
        });
        cities["US"] = [];
        $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
          cities["US"].push({id: v, text: v});
        });
        
        var currentValue = "NL";
          $('#country').editable({
          type: 'select2',
          value : 'NL',
          //onblur:'ignore',
              source: countries,
          select2: {
            'width': 140
          },    
          success: function(response, newValue) {
            if(currentValue == newValue) return;
            currentValue = newValue;
            
            var new_source = (!newValue || newValue == "") ? [] : cities[newValue];
            
            //the destroy method is causing errors in x-editable v1.4.6+
            //it worked fine in v1.4.5
            /**     
            $('#city').editable('destroy').editable({
              type: 'select2',
              source: new_source
            }).editable('setValue', null);
            */
            
            //so we remove it altogether and create a new element
            var city = $('#city').removeAttr('id').get(0);
            $(city).clone().attr('id', 'city').text('Select City').editable({
              type: 'select2',
              value : null,
              //onblur:'ignore',
              source: new_source,
              select2: {
                'width': 140
              }
            }).insertAfter(city);//insert it after previous instance
            $(city).remove();//remove previous instance
            
          }
          });
      
        $('#city').editable({
          type: 'select2',
          value : 'Amsterdam',
          //onblur:'ignore',
              source: cities[currentValue],
          select2: {
            'width': 140
          }
          });
      
      
        
        //custom date editable
        $('#signup').editable({
          type: 'adate',
          date: {
            //datepicker plugin options
                format: 'yyyy/mm/dd',
            viewformat: 'yyyy/mm/dd',
             weekStart: 1
             
            //,nativeUI: true//if true and browser support input[type=date], native browser control will be used
            //,format: 'yyyy-mm-dd',
            //viewformat: 'yyyy-mm-dd'
          }
        })
      
          $('#age').editable({
              type: 'spinner',
          name : 'age',
          spinner : {
            min : 16,
            max : 99,
            step: 1,
            on_sides: true
            //,nativeUI: true//if true and browser support input[type=number], native browser control will be used
          }
        });
        
      
          $('#login').editable({
              type: 'slider',
          name : 'login',
          
          slider : {
             min : 1,
              max: 50,
            width: 100
            //,nativeUI: true//if true and browser support input[type=range], native browser control will be used
          },
          success: function(response, newValue) {
            if(parseInt(newValue) == 1)
              $(this).html(newValue + " hour ago");
            else $(this).html(newValue + " hours ago");
          }
        });
      
        $('#about').editable({
          mode: 'inline',
              type: 'wysiwyg',
          name : 'about',
      
          wysiwyg : {
            //css : {'max-width':'300px'}
          },
          success: function(response, newValue) {
          }
        });
        
        
        
        // *** editable avatar *** //
      
      
        
      
        //////////////////////////////
        $('#profile-feed-1').ace_scroll({
          height: '250px',
          mouseWheelLock: true,
          alwaysVisible : true
        });
      
        $('a[ data-original-title]').tooltip();
      
        $('.easy-pie-chart.percentage').each(function(){
        var barColor = $(this).data('color') || '#555';
        var trackColor = '#E2E2E2';
        var size = parseInt($(this).data('size')) || 72;
        $(this).easyPieChart({
          barColor: barColor,
          trackColor: trackColor,
          scaleColor: false,
          lineCap: 'butt',
          lineWidth: parseInt(size/10),
          animate:false,
          size: size
        }).css('color', barColor);
        });
        
        ///////////////////////////////////////////
      
        //right & left position
        //show the user info on right or left depending on its position
        $('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
          var $this = $(this);
          var $parent = $this.closest('.tab-pane');
      
          var off1 = $parent.offset();
          var w1 = $parent.width();
      
          var off2 = $this.offset();
          var w2 = $this.width();
      
          var place = 'left';
          if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
          
          $this.find('.popover').removeClass('right left').addClass(place);
        }).on('click', function(e) {
          e.preventDefault();
        });
      
      
        ///////////////////////////////////////////
        $('#user-profile-3')
        .find('input[type=file]').ace_file_input({
          style:'well',
          });
        ////////////////////
        //change profile
        $('[data-toggle="buttons"] .btn').on('click', function(e){
          var target = $(this).find('input[type=radio]');
          var which = parseInt(target.val());
          $('.user-profile').parent().addClass('hide');
          $('#user-profile-'+which).parent().removeClass('hide');
        });
        
        
        
        /////////////////////////////////////
        $(document).one('ajaxloadstart.page', function(e) {
          //in ajax mode, remove remaining elements before leaving page
          try {
            $('.editable').editable('destroy');
          } catch(e) {}
          $('[class*=select2]').remove();
        });
      });
    </script>
  












	
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
        <li><a href="pages/contact.php">contact Us</a></li>
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
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>
