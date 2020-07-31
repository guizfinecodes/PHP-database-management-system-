<?php
  //error_reporting(0);
  include('connect.php');
  ?>

<?php
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO files(user_id,file,type,size) VALUES('1','$file','$file_type','$file_size')";
 mysqli_query($db,$sql); 
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Upload and view With PHP and MySql</title>
<link rel="stylesheet" href="styless.css" type="text/css" />
</head>
<body>
<form action="file-upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" >
<button type="submit" name="btn-upload">upload</button>
</form>
</body>
</html>