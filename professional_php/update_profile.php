<?php
include('dbconnect.php');
include("connect.php"); 
error_reporting(0);
mysql_select_db('prof', mysql_connect('localhost', 'root', ''))or die(mysql_error());

?>


<?php
SESSION_START();
?>

<!--*****************Analysis data*****************************-->

<?php
$id = $_GET['id'];
    $select = "SELECT * FROM 
            users WHERE user_id='$id'";
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
            $file = "$rec[file]";
            $birthdate = "$rec[birthdate]";
            $website = "$rec[website]";
            $textarea = "$rec[textarea]";
            $profession = "$rec[profession]";
            
            }
        }
  ?>





<!DOCTYPE html>

<html>
<head>
<title>P-FORUM | update-Prof</title>
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
        <li><i class="fa fa-phone"></i> +2547xxxxxxxxx [KENYA]</li>
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
      <h1><a href="professional.php <?php echo '?id='.$id; ?>">PROFESSIONALS' FORUM</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <!--<li ><a href="index.php">Home</a></li>-->
        <li><a  href="professional.php <?php echo '?id='.$id; ?>">Account</a>
          <!--<ul>
            <li><a href="view_profile.php">View Profile</a></li>-->
            <!--<li><a href="register.php">Register</a></li>-->
            <!--<li><a href="pages/contact.php">Contact</a></li>-->
            <!--<li><a href="update_profile.php">update Account</a></li>
            <li><a href="#">manage Account</a></li>
          </ul>-->
        </li>
        <li><a  href="view_profile.php <?php echo '?id='.$id; ?>">view profile</a>
          <!--<ul>-->
            <li class="active"><a href="update_profile.php <?php echo '?id='.$id; ?>">update</a></li>
            <li><a  href="change-password.php <?php echo '?id='.$id; ?>">Change Password</a>
              <!--<ul>
                <li><a href="login.php">View Candidates</a></li>
                <li><a href="login.php">Short-list Candidates</a></li>
                <li><a href="login.php">Contact Candidates</a></li>
              </ul>-->
            </li>
        
        
        <!--<li><a href="pages/about_index.php">About</a></li>-->
        <li><a href="index.php">Log Out</a></li>

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


<div>
									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
											<!--<div class="well well-sm">-->
												<!-- -
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		&nbsp; -->
												<!--<div class="inline middle blue bigger-110"> Your profile is 70% complete </div>

												&nbsp; &nbsp; &nbsp;
												<div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active">
													<div class="progress-bar progress-bar-success" style="width:70%"></div>
												</div>
											</div>--><!-- /.well -->

											<div class="space"></div>

											<form class="form-horizontal" action="update_profile1.php" method="post" enctype="multipart/form-data">
												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic">
																<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
																Your Basic Info
															</a>
														</li>

														<!--<li>
															<a data-toggle="tab" href="#edit-settings">
																<i class="purple ace-icon fa fa-cog bigger-125"></i>
																Settings
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#edit-password">
																<i class="blue ace-icon fa fa-key bigger-125"></i>
																change Password
															</a>
														</li>-->
													</ul>

													<div class="tab-content profile-edit-tab-content">
														<div id="edit-basic" class="tab-pane in active">
															<h4 class="header blue bolder smaller">General</h4>

															<div class="row">
																<label>user idno:</label>
                                <input type="text" name="user_id" id="user_id" readonly value="<?php echo $id?>" class="form-control">
								
								<div class="col-xs-12 col-sm-4">

																	
<br><br>
  									<label class="col-sm-3 control-label no-padding-right" for="form-field-date">Birth Date</label>

																<div class="col-sm-9">
																	<div class="input-medium">
																		<div class="input-group">
																			                                <input type="date" name="birthdate" required class="form-control" value="<?php echo date('yyyy-mm-dd');?>" >

																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar"></i>
																			</span>
																		</div>
																	</div>
																
																</div><br><br><br><br><br>

																<label class="col-sm-3 control-label no-padding-right" for="form-field-username">gender</label>
																<div class="col-sm-9">
																	<div class="input-medium">
																		<div class="input-group">
																		<select name="gender" required="" class="col-xs-12 col-sm-10">
												                            <option value="">--select gender--</option>
												                            <option>Male</option>
												                            <option>Female</option>
												                        </select>
												                    </div></div></div>
</div>

																<div class="vspace-12-sm"></div>

																<div class="col-xs-12 col-sm-8">
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">firstname</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" required="" id="form-field-username" placeholder="firstname" name="firstname" value="<?php echo $firstname?>" >
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">lastname</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" required="" id="form-field-username" placeholder="lastname" name="lastname" value="<?php echo $lastname?>"/>
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" required="" id="form-field-username" placeholder="Username" name="username" value="<?php echo $username?>">
																		</div>
																	</div>
																	
																	
																	
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">nationality</label>

																		<div class="col-sm-8">
																			<select name="nationality" id="form-field-username" required="" class="col-xs-12 col-sm-10">
												                            <option value="">--select nationality--</option>
												                            <option>KENYAN</option>
												                            
												                        </select>
																			<!--<input class="col-xs-12 col-sm-10" type="text" required="" id="form-field-username" placeholder="nationality" name="nationality" value="<?php echo $nationality?>" />-->
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Profession</label>

																		<div class="col-sm-8">
																			<select  name="profession" id="profession" onchange="OnSelectionChange(this)" required=""  class="form-control" >
                                    <option value="">--select profession--</option>
                                                <?php
                                                $sql4="SELECT profession FROM profession";
                                                $records4=mysqli_query($db,$sql4);
                                                   while($users4=mysqli_fetch_array($records4,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$users4['profession']."</option>";
                                                        $profession=$users4['profession'];
                                                        }

                                                ?></select>



																			<!--<input class="col-xs-12 col-sm-10" type="text" required="" id="form-field-username" placeholder="county" name="county" value="<?php echo $county?>" />-->
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">county</label>

																		<div class="col-sm-8">
																			<select  name="county" id="county" onchange="OnSelectionChange(this)" required=""  class="form-control" >
                                    <option value="">--select county--</option>
                                                <?php
                                                $sql4="SELECT county FROM counties";
                                                $records4=mysqli_query($db,$sql4);
                                                   while($users4=mysqli_fetch_array($records4,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$users4['county']."</option>";
                                                        $countyname=$users4['county'];
                                                        }

                                                ?></select>



																			<!--<input class="col-xs-12 col-sm-10" type="text" required="" id="form-field-username" placeholder="county" name="county" value="<?php echo $county?>" />-->
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Highest level of education</label>

																		<div class="col-sm-8">

																			<select  name="education" id="education" onchange="OnSelectionChange(this)" required=""  class="form-control" >
                                    <option value="">--select level--</option>
                                                <?php
                                                $sql4="SELECT level FROM education";
                                                $records4=mysqli_query($db,$sql4);
                                                   while($users4=mysqli_fetch_array($records4,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$users4['level']."</option>";
                                                        $level=$users4['level'];
                                                        }

                                                ?></select>

																			<!--<input class="col-xs-12 col-sm-10" type="text" required="" id="form-field-username" placeholder="education" name="education" value="<?php echo $education?>" />-->
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Status</label>

																		<div class="col-sm-8">

																			<select  name="status" id="status" onchange="OnSelectionChange(this)" required=""  class="form-control" >
                                    <option value="">--select status--</option>
                                                <?php
                                                $sql4="SELECT status FROM status";
                                                $records4=mysqli_query($db,$sql4);
                                                   while($users4=mysqli_fetch_array($records4,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$users4['status']."</option>";
                                                        $status=$users4['status'];
                                                        }

                                                ?></select>

																			<!--<input class="col-xs-12 col-sm-10" type="text" required="" id="form-field-username" placeholder="education" name="education" value="<?php echo $education?>" />-->
																		</div>
																	</div>
																	
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">age</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" required="" id="form-field-username" placeholder="age" name="age" value="<?php echo $age?>" />
																		</div>
																	</div>
																	

																	<div class="space-4"></div>

																	
																</div>
															</div>

															<hr />
															

															<div class="space-4"></div>

															<div class="form-group">
																<label class=" control-label no-padding-right" for="form-field-comment"><font color="green"><u>Description about youself, or other skills aquired and experiences:</u></font></label>

																<!--<div class="col-sm-9">
																	<textarea id="form-field-comment"></textarea>
																</div>-->
															</div>
															<div class="form-group">
  
													  <textarea class="form-control" required="" name="textarea" id="exampleFormControlTextarea3"  placeholder="Write something like education background"  rows="7">
													  	<?php $select="SELECT * FROM users WHERE user_id='$id'";
                                  $result = mysql_fetch_array(mysql_query($select));
                                  $qry=mysql_query($select);
                                      if($qry)
                                      {
                                      while($rec = mysql_fetch_array($qry)){ 
                                      	$textarea = "$rec[textarea]"; } 
                                 ?> <?php echo $textarea;
                                } ?></textarea>
													</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Contact</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="email" id="form-field-email" required="" name="email" value="<?php echo $email ?>" />
																		<i class="ace-icon fa fa-envelope"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="url" id="form-field-website" value="<?php echo $website ?>" name="website" placeholder="http://www.1234.com/" />
																		<i class="ace-icon fa fa-globe"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input  name="phone" required="" type="text" id="form-field-phone" value="<?php echo $phone ?>" />
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
																		<input type="text" placeholder="facebook_1234" id="form-field-facebook" />
																		<i class="ace-icon fa fa-facebook blue"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" placeholder="twitter_1234" id="form-field-twitter" />
																		<i class="ace-icon fa fa-twitter light-blue"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" placeholder="google_1234" id="form-field-gplus" />
																		<i class="ace-icon fa fa-google-plus red"></i>
																	</span>
																</div>
															</div>
														</div>

														

														
														
													</div>
												</div>

												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<!--<button class="btn btn-info" type="button">
															<i class="ace-icon fa fa-check bigger-110"></i>
															UPDATE
														</button>-->
														<button type="submit" name="register" value="Save Record" class="btn btn-success btn-labeled">UPDATE<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>

														&nbsp; &nbsp;
														<button class="btn" type="reset">
															<i class="ace-icon fa fa-undo bigger-110"></i>
															RESET
														</button>
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
          //btn_choose:'Change avatar',
          btn_change:true,
          no_icon:'ace-icon fa fa-picture-o',
          thumbnail:'large',
          droppable:true,
          
          allowExt: ['jpg', 'jpeg', 'png', 'gif' , 'pdf' , 'pdfs', 'doc', 'docx'],
          allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif',]
        })
        .end().find('button[type=reset]').on(ace.click_event, function(){
          $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
       })
        .end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
          $(this).prev().focus();
        })
        $('.input-mask-phone').mask('(999) 999-9999');
      
        //$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
      
      
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
