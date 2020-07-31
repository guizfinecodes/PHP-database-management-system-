<?php
include_once 'connect.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="styless.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
 <table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="file-upload.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php 
                    
                    $sql ="SELECT  * from files where user_id='1'";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    $num_rows=mysqli_num_rows($user_query);
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $id = $row['user_id'];
                  
                        ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        <td><input type='submit' name='delete' value='Delete' onclick='return confirmDelete()'></td>
        </tr>
        <?php
 }
 ?>
    </table>

    
</div>
<script type='text/javascript'> function confirmDelete() { return confirm("Are you sure you want to delete this?"); } </script>
</body>
</html>