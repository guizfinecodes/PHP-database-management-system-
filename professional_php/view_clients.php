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
                  
                        ?>

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
            $file = "$rec[file]";
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
        <li><a  href="employer_update_profile.php <?php echo '?id='.$id; ?>"> profile update</a>
          <!--<ul>-->
            <li class="active"><a href="view_clients.php <?php echo '?id='.$id; ?>">view clients</a></li>
            <li><a  href="change-password-employers.php <?php echo '?id='.$id; ?>">Change password</a>
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

											<form class="form-horizontal">
												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic">
																<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
																Your Basic Info
															</a>
														</li>

														
													</ul>

													<div class="tab-content profile-edit-tab-content">
														<div id="edit-basic" class="tab-pane in active">
						
                              

                              <div class="form-group">
                                <label class=" control-label no-padding-right" for="form-field-comment"><font color="green"><u><h2>View clients informaton that suite your criteria</h2></u></font></label>

                                <!--<div class="col-sm-9">
                                  <textarea id="form-field-comment"></textarea>
                                </div>-->
                              </div>
                              
														<div class="table-responsive">
                                <h4 class="header blue bolder smaller">Available clients as per your search</h4>
                                    
                <div class="row">
                  <div class="col-xs-12">
                   
                    <div class="clearfix">
                      <div class="pull-right tableTools-container"></div>
                    </div>
                    <div class="table-header">
                    details for the available clients:
                    </div>

                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    <div>
                      <table id="dynamic-table" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th class="center"></th>
                            <th>name</th>
                            <th>profession</th>
                            <th>education level<br>and status</th>
                            <th>county</th>
                            <th>view</th>
                            <th>contact client</th>
                            
                          </tr>
                        </thead>

                        <tbody>
                          
                            

                        
                         
                              <?php 
                                $sql ="SELECT  * from users where role = 'professional'";
                                $user_query=mysqli_query($db,$sql) or die("error getting data");
                                $num_rows=mysqli_num_rows($user_query);
                                echo " $num_rows available Candidates found"; 
                                while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                                $id = $row['user_id'];
                  
                                 ?>
                                                <tr>
                                                <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="radio" value="<?php echo $id; ?>">
                                                </td>
                                                <td><center><?php echo $row['firstname']." ".$row['lastname']; ?></center></td>
                                                <td><center><?php echo $row['profession']; ?></center></td>
                                                
                                                <!--<td><center><?php echo $row['age']; ?></center></td>-->
                                                <td><center><?php echo $row['education'].", ".$row['status']; ?></center></td>
                                                <td><center><?php echo $row['county']; ?></center></td>
                                                
                                               
                                               
                                                
                                                <td><center><a href="employer_view_profile.php <?php echo '?id='.$id; ?>" class="btn btn-info"><i class="glyphicon glyphicon-info" name="view_profile"></i>view</a></center></td>
                                                <td><center><a href="employer_contact_client.php <?php echo '?id='.$id; ?>" class="btn btn-success"><i class="glyphicon glyphicon-info" name="view_profile"></i>contact</a></center></td>
                                                
                                                
                                                </tr>
                                                 <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

               
                </div><!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->
</div>




														</div>

														

														
													</div>
												</div>

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
    <!-- page specific plugin scripts -->
    <script src="assets/new/js/jquery.dataTables.min.js"></script>
    <script src="assets/new/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="assets/new/js/dataTables.tableTools.min.js"></script>
    <script src="assets/new/js/dataTables.colVis.min.js"></script>

    <!-- ace scripts -->
    <script src="assets/new/js/ace-elements.min.js"></script>
    <script src="assets/new/js/ace.min.js"></script>


   
    <script type="text/javascript">
      jQuery(function($) {
        //initiate dataTables plugin
        var oTable1 = 
        $('#dynamic-table')
        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
        .dataTable( {
          bAutoWidth: false,
          "aoColumns": [
            { "bSortable": false },
            null, null,null, null, null,
            { "bSortable": false }
          ],
          "aaSorting": [],
      
          //,
          //"sScrollY": "200px",
          //"bPaginate": false,
      
          //"sScrollX": "100%",
          //"sScrollXInner": "120%",
          //"bScrollCollapse": true,
          //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
          //you may want to wrap the table inside a "div.dataTables_borderWrap" element
      
          //"iDisplayLength": 50
          } );
        //oTable1.fnAdjustColumnSizing();
      
      
        //TableTools settings
        TableTools.classes.container = "btn-group btn-overlap";
        TableTools.classes.print = {
          "body": "DTTT_Print",
          "info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
          "message": "tableTools-print-navbar"
        }
      
        //initiate TableTools extension
        var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
          "sSwfPath": "assets/swf/copy_csv_xls_pdf.swf",
          
          "sRowSelector": "td:not(:last-child)",
          "sRowSelect": "multi",
          "fnRowSelected": function(row) {
            //check checkbox when row is selected
            try { $(row).find('input[type=checkbox]').get(0).checked = true }
            catch(e) {}
          },
          "fnRowDeselected": function(row) {
            //uncheck checkbox
            try { $(row).find('input[type=checkbox]').get(0).checked = false }
            catch(e) {}
          },
      
          "sSelectedClass": "success",
              "aButtons": [
            {
              "sExtends": "copy",
              "sToolTip": "Copy to clipboard",
              "sButtonClass": "btn btn-white btn-primary btn-bold",
              "sButtonText": "<i class='fa fa-copy bigger-110 pink'></i>",
              "fnComplete": function() {
                this.fnInfo( '<h3 class="no-margin-top smaller">Table copied</h3>\
                  <p>Copied '+(oTable1.fnSettings().fnRecordsTotal())+' row(s) to the clipboard.</p>',
                  1500
                );
              }
            },
            
            {
              "sExtends": "csv",
              "sToolTip": "Export to CSV",
              "sButtonClass": "btn btn-white btn-primary  btn-bold",
              "sButtonText": "<i class='fa fa-file-excel-o bigger-110 green'></i>"
            },
            
            {
              "sExtends": "pdf",
              "sToolTip": "Export to PDF",
              "sButtonClass": "btn btn-white btn-primary  btn-bold",
              "sButtonText": "<i class='fa fa-file-pdf-o bigger-110 red'></i>"
            },
            
            {
              "sExtends": "print",
              "sToolTip": "Print view",
              "sButtonClass": "btn btn-white btn-primary  btn-bold",
              "sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",
              
              "sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>Optional Navbar &amp; Text</small></a></div></div>",
              
              "sInfo": "<h3 class='no-margin-top'>Print view</h3>\
                    <p>Please use your browser's print function to\
                    print this table.\
                    <br />Press <b>escape</b> when finished.</p>",
            }
              ]
          } );
        //we put a container before our table and append TableTools element to it
          $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));
        
        //also add tooltips to table tools buttons
        //addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
        //so we add tooltips to the "DIV" child after it becomes inserted
        //flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
        setTimeout(function() {
          $(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
            var div = $(this).find('> div');
            if(div.length > 0) div.tooltip({container: 'body'});
            else $(this).tooltip({container: 'body'});
          });
        }, 200);
        
        
        
        //ColVis extension
        var colvis = new $.fn.dataTable.ColVis( oTable1, {
          "buttonText": "<i class='fa fa-search'></i>",
          "aiExclude": [0, 6],
          "bShowAll": true,
          //"bRestore": true,
          "sAlign": "right",
          "fnLabel": function(i, title, th) {
            return $(th).text();//remove icons, etc
          }
          
        }); 
        
        //style it
        $(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')
        
        //and append it to our table tools btn-group, also add tooltip
        $(colvis.button())
        .prependTo('.tableTools-container .btn-group')
        .attr('title', 'Show/hide columns').tooltip({container: 'body'});
        
        //and make the list, buttons and checkboxed Ace-like
        $(colvis.dom.collection)
        .addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
        .find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
        .find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');
      
      
        
        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
        
        //select/deselect all rows according to table header checkbox
        $('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
          var th_checked = this.checked;//checkbox inside "TH" table header
          
          $(this).closest('table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) tableTools_obj.fnSelect(row);
            else tableTools_obj.fnDeselect(row);
          });
        });
        
        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
          var row = $(this).closest('tr').get(0);
          if(!this.checked) tableTools_obj.fnSelect(row);
          else tableTools_obj.fnDeselect($(this).closest('tr').get(0));
        });
        
      
        
        
          $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
        });
        
        
        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
          var th_checked = this.checked;//checkbox inside "TH" table header
          
          $(this).closest('table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
            else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
          });
        });
        
        //select/deselect a row when the checkbox is checked/unchecked
        $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
          var $row = $(this).closest('tr');
          if(this.checked) $row.addClass(active_class);
          else $row.removeClass(active_class);
        });
      
        
      
        /********************************/
        //add tooltip for small view action buttons in dropdown menu
        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        
        //tooltip placement on right or left
        function tooltip_placement(context, source) {
          var $source = $(source);
          var $parent = $source.closest('table')
          var off1 = $parent.offset();
          var w1 = $parent.width();
      
          var off2 = $source.offset();
          //var w2 = $source.width();
      
          if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
          return 'left';
        }
      
      })
    </script>

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
                  /*text: 'Uploading to server can be easily implemented. A working example is included with the template.',*/
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