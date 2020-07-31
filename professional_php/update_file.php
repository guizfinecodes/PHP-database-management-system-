
<?php
  //error_reporting(0);
  include('connect.php');
 // mysql_select_db('sms2',mysql_connect('localhost','root',''))or die(mysql_error());
   ?>
  <?php
    if (isset($_POST['upload'])){

        $user_id=$_POST['user_id'];
 
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO files(user_id,file,type,size) VALUES('$user_id','$file','$file_type','$file_size')";
 mysqli_query($db,$sql); 
?>

    <script>
alert('File Succsessfully uploaded');
window.location = "view_profile.php";
</script>

<?php
}?>

