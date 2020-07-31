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
                    
$id = $_SESSION['user_id'];
                    $sql ="SELECT * from users where user_id='$id' ";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    $num_rows=mysqli_num_rows($user_query);
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $id = $row['user_id'];
                  
                        ?>
<!DOCTYPE html>

<html>
<head>
<title>P-FORUM | Prof</title>
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
        <li><i class="fa fa-phone"></i> +2547xxxxxx [KENYA]</li>
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
      <h1><a href="employer.php <?php echo '?id='.$id; ?>">PROFESSIONALS' DB FORUM</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <!--<li ><a href="index.php">Home</a></li>-->
        <li class="active"><a  href="employer.php <?php echo '?id='.$id; ?>">Account</a>
          <!--<ul>
            <li><a href="view_profile.php">View Profile</a></li>-->
            <!--<li><a href="register.php">Register</a></li>-->
            <!--<li><a href="pages/contact.php">Contact</a></li>-->
            <!--<li><a href="update_profile.php">update Account</a></li>
            <li><a href="#">manage Account</a></li>
          </ul>-->
        </li>
        <li><a  href="employer_update_profile.php <?php echo '?id='.$id; ?>"> profile update</a>
          <!--<ul>-->
            <li><a href="view_clients.php <?php echo '?id='.$id; ?>">view clients</a></li>
           <!-- <li><a  href="change-password-employer.php <?php echo '?id='.$id; ?>">Change password</a>
              <ul>
                <li><a href="login.php">View Candidates</a></li>
                <li><a href="login.php">Short-list Candidates</a></li>
                <li><a href="login.php">Contact Candidates</a></li>
              </ul>
            </li>
        -->
        
        <!--<li><a href="pages/about_index.php">About</a></li>
        <li><a href="index.php">Log Out</a></li>-->
        <li><a class="drop" href="#">Operations <img src="images/img/export2.png"></a>
          <ul>
            <li><a href="index.php">log out</a></li>
            <li><a href="delete_account.php  <?php echo '?id='.$id; ?>">Delete Account</a></li>
            <li><a  href="change-password-employer.php <?php echo '?id='.$id; ?>">Change password</a></li>
            
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
        
        if(isset($_SESSION['user_id']))
        { 
        echo   "WELCOME EMPLOYER: ".$_SESSION['firstname']. "&nbsp;".$_SESSION['lastname']. " ";
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
                  
                  
                <div class="hr dotted"></div>

                <div>
                  <div id="user-profile-1" class="user-profile row">
                    <div class="col-xs-12 col-sm-3 center">
                      <div>
                        <span class="profile-picture">
                          <img id="avatar" class="editable img-responsive" alt="Avatar" src="images/demo/avatar_2x.png" />
                        </span>

                        <div class="space-4"></div>

                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                          <div class="inline position-relative">
                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                              <i class="ace-icon fa fa-circle light-green"></i>
                              &nbsp;
                              <span class="white">
                                <?php { 
                                echo   "".$_SESSION['firstname']. "&nbsp;".$_SESSION['lastname']. " ";
                                $role=$_SESSION['role'];
                                } ?></span>
                            </a>

                            <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                              <li class="dropdown-header"> welcome user </li>

                              <li>
                                <a >
                                  <i class="ace-icon fa fa-circle green"></i>
&nbsp;
                                  <span class="green">upate your profile<br> please if you <br>cant find your<br>picture.</span>
                                </a>
                              </li>

                              
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="space-6"></div>

                      <div class="profile-contact-info">
                        <div class="profile-contact-links align-left">
                          <a href="employer_update_profile.php <?php echo '?id='.$id; ?>" class="btn btn-link">
                            <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
                            UPDATE PROFILE
                          </a>

                          <a href="view_clients.php <?php echo '?id='.$id; ?>" class="btn btn-link">
                            <i class="ace-icon fa fa-globe bigger-125 blue "></i>
                            VIEW  CLIENTS
                          </a>

                          <!--<a href="notification.php <?php echo '?id='.$id; ?>" class="btn btn-link">
                            <i class="ace-icon fa fa-envelope bigger-120 pink"></i>
                            VIEW NOTIFICATIONS
                          </a>-->
                        </div>

                        <div class="space-6"></div>

                        <div class="profile-social-links align-center">
                          <a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
                            <i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
                          </a>

                          <a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
                            <i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
                          </a>

                          <a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
                            <i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
                          </a>
                        </div>
                      </div>

                      <div class="hr hr12 dotted"></div>

                      <div class="clearfix">
                        <div class="grid2">
                          <span class="bigger-175 blue">
                              0
                          </span>

                          <br />
                          inbox
                        </div>

                        <div class="grid2">
                          <span class="bigger-175 blue">0</span>

                          <br />
                          replies
                        </div>
                      </div>

                      <div class="hr hr16 dotted"></div>
                    </div>

                    <div class="col-xs-12 col-sm-9">
                      

                      <div class="space-12"></div>



                      <?php 
                                  $select="SELECT * FROM users WHERE user_id='$id'";
                                  $result = mysql_fetch_array(mysql_query($select));
                                  $qry=mysql_query($select);
                                      if($qry)
                                      {
                                while($rec = mysql_fetch_array($qry)){
                                $firstname = "$rec[firstname]";
                                $lastname = "$rec[lastname]";
                                $location = "$rec[location]";
                                $company_type = "$rec[company_type]";
                                $company_name = "$rec[company_name]";
                                $address = "$rec[address]";
                                $company_email = "$rec[company_email]";
                                $email = "$rec[email]";
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
                               
                      <div class="profile-user-info profile-user-info-striped">
                        <div class="profile-info-row">
                          <div class="profile-info-name">User Name </div>
                      

                          <div class="profile-info-value">
                            <span class="editable" id="username" ><?php echo $firstname; ?> <?php echo $lastname; ?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Name of Company </div>

                          <div class="profile-info-value">
                            <span  class="editable" id="company_name"><?php echo $company_name; ?> || <?php echo $firstname; ?> <?php echo $lastname; ?></span>
                          </div>
                        </div>


                        <div class="profile-info-row">
                          <div class="profile-info-name">Company Location </div>

                          <div class="profile-info-value">
                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                            <span class="editable" id="country"><?php echo $location; ?></span>
                            <!--<span class="editable" id="city">Amsterdam</span>-->
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Type of Company </div>

                          <div class="profile-info-value">
                            <span  class="editable" id="age"><?php echo $company_type; ?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name">Box/Address</div>

                          <div class="profile-info-value">
                            <span class="editable" id="about"><?php echo $address; ?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Email </div>

                          <div class="profile-info-value">
                            <span class="editable" id="signup"><?php echo $email; ?>, <?php echo $company_email; ?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name">Phone</div>

                          <div class="profile-info-value">
                            <span class="editable" id="login"><?php echo $company_phone; ?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name">Specialisation<br>Daily Work</div>

                          <div class="profile-info-value">
                            <span class="editable" id="about"><?php echo $specialisation; ?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name">Website</div>

                          <div class="profile-info-value">
                            <span class="editable" id="about"><?php echo $company_website; ?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Vacancy Available </div>

                          <div class="profile-info-value">
                            <span class="editable" id="signup"><?php echo $vacancy; ?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name">Any other related Information</div>

                          <div class="profile-info-value">
                            <span class="editable" id="about"><?php echo $information; ?></span>
                          </div>
                        </div>

                        <br>

                        <!--<button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="register">Register</button>-->
                      </div>

                      <div class="space-20"></div>

                      <div class="widget-box transparent">
                        
                        <?php } ?>
                  </div>
                </div>

                
                      

                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->


      

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
        /**
        //editables 
        
        //text editable
          $('#username')
        .editable({
          type: 'text',
          name: 'username'
          });
      
      
        
        //select2 editable
        var nationality = [];
          $.each({ "CA": "KENYAN", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
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
            /*
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
        **/
        
        
        // *** editable avatar *** //
        try {//ie8 throws some harmless exceptions, so let's catch'em
      
          //first let's add a fake appendChild method for Image element for browsers that have a problem with this
          //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
          try {
            document.createElement('IMG').appendChild(document.createElement('B'));
          } catch(e) {
            Image.prototype.appendChild = function(el){}
          }
      
          var last_gritter
          $('#avatar').editable({
            type: 'image',
            name: 'avatar',
            value: null,
            image: {
              //specify ace file input plugin's options here
              btn_choose: 'Change Avatar',
              droppable: true,
              maxSize: 110000,//~100Kb
      
              //and a few extra ones here
              name: 'avatar',//put the field name here as well, will be used inside the custom plugin
              on_error : function(error_type) {//on_error function will be called when the selected file has a problem
                if(last_gritter) $.gritter.remove(last_gritter);
                if(error_type == 1) {//file format error
                  last_gritter = $.gritter.add({
                    title: 'File is not an image!',
                    text: 'Please choose a jpg|gif|png image!',
                    class_name: 'gritter-error gritter-center'
                  });
                } else if(error_type == 2) {//file size rror
                  last_gritter = $.gritter.add({
                    title: 'File too big!',
                    text: 'Image size should not exceed 100Kb!',
                    class_name: 'gritter-error gritter-center'
                  });
                }
                else {//other error
                }
              },
              on_success : function() {
                $.gritter.removeAll();
              }
            },
              url: function(params) {
              // ***UPDATE AVATAR HERE*** //
              //for a working upload example you can replace the contents of this function with 
              //examples/profile-avatar-update.js
      
              var deferred = new $.Deferred
      
              var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
              if(!value || value.length == 0) {
                deferred.resolve();
                return deferred.promise();
              }
      
      
              //dummy upload
              setTimeout(function(){
                if("FileReader" in window) {
                  //for browsers that have a thumbnail of selected image
                  var thumb = $('#avatar').next().find('img').data('thumb');
                  if(thumb) $('#avatar').get(0).src = thumb;
                }
                
                deferred.resolve({'status':'OK'});
      
                if(last_gritter) $.gritter.remove(last_gritter);
                last_gritter = $.gritter.add({
                  title: 'Avatar Updated!',
                  text: 'You are welcome, please, take yoyr time.',
                  class_name: 'gritter-info gritter-center'
                });
                
               } , parseInt(Math.random() * 800 + 800))
      
              return deferred.promise();
              
              // ***END OF UPDATE AVATAR HERE*** //
            },
            
            success: function(response, newValue) {
            }
          })
        }catch(e) {}
        
        /**
        //let's display edit mode by default?
        var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
        if(blank_image) {
          $('#avatar').editable('show').on('hidden', function(e, reason) {
            if(reason == 'onblur') {
              $('#avatar').editable('show');
              return;
            }
            $('#avatar').off('hidden');
          })
        }
        */
      
        //another option is using modals
        $('#avatar2').on('click', function(){
          var modal = 
          '<div class="modal fade">\
            <div class="modal-dialog">\
             <div class="modal-content">\
            <div class="modal-header">\
              <button type="button" class="close" data-dismiss="modal">&times;</button>\
              <h4 class="blue">Change Avatar</h4>\
            </div>\
            \
            <form class="no-margin">\
             <div class="modal-body">\
              <div class="space-4"></div>\
              <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
             </div>\
            \
             <div class="modal-footer center">\
              <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
              <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
             </div>\
            </form>\
            </div>\
           </div>\
          </div>';
          
          
          var modal = $(modal);
          modal.modal("show").on("hidden", function(){
            modal.remove();
          });
      
          var working = false;
      
          var form = modal.find('form:eq(0)');
          var file = form.find('input[type=file]').eq(0);
          file.ace_file_input({
            style:'well',
            btn_choose:'Click to choose new avatar',
            btn_change:null,
            no_icon:'ace-icon fa fa-picture-o',
            thumbnail:'small',
            before_remove: function() {
              //don't remove/reset files while being uploaded
              return !working;
            },
            allowExt: ['jpg', 'jpeg', 'png', 'gif'],
            allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
          });
      
          form.on('submit', function(){
            if(!file.data('ace_input_files')) return false;
            
            file.ace_file_input('disable');
            form.find('button').attr('disabled', 'disabled');
            form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");
            
            var deferred = new $.Deferred;
            working = true;
            deferred.done(function() {
              form.find('button').removeAttr('disabled');
              form.find('input[type=file]').ace_file_input('enable');
              form.find('.modal-body > :last-child').remove();
              
              modal.modal("hide");
      
              var thumb = file.next().find('img').data('thumb');
              if(thumb) $('#avatar2').get(0).src = thumb;
      
              working = false;
            });
            
            
            setTimeout(function(){
              deferred.resolve();
            } , parseInt(Math.random() * 800 + 800));
      
            return false;
          });
              
        });
      
        
      
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
          btn_choose:'Change avatar',
          btn_change:null,
          no_icon:'ace-icon fa fa-picture-o',
          thumbnail:'large',
          droppable:true,
          
          allowExt: ['jpg', 'jpeg', 'png', 'gif'],
          allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
        })
        .end().find('button[type=reset]').on(ace.click_event, function(){
          $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
        })
        .end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
          $(this).prev().focus();
        })
        $('.input-mask-phone').mask('(999) 999-9999');
      
        $('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
      
      
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
  </body>
</html>

<!--Section: Testimonials v.1-->


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
<?php } ?>