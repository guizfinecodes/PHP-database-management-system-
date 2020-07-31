
  <?php
  //error_reporting(0);
  include('connect.php');
   ?>
   <?php
    if (isset($_POST['register'])){
 
                $user_id=$_POST['user_id'];
                $firstname=$_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username= $_POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $gender = $_POST['gender'];
                $nationality = $_POST['nationality'];
                $county = $_POST['county'];
                $education = $_POST['education'];
                $age = $_POST['age'];
                $profession = $_POST['profession'];
                $birthdate = $_POST['birthdate'];
                $website = $_POST['website'];
                $textarea = $_POST['textarea'];
                $status = $_POST['status'];
               
                
$sql2="UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`username`='$username',`email`='$email',`phone`='$phone',`gender`='$gender',`nationality`='$nationality',`county`='$county',`education`='$education',`age`='$age',`birthdate`='$birthdate',`website`='$website', `textarea`='$textarea', `profession`='$profession', `status`='$status' WHERE `user_id`=$user_id"; 

 
               mysqli_query($db,$sql2);
                
?>



<?php
       
                        $query="SELECT * FROM users WHERE user_id='$user_id'";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQLI_ASSOC))
                        {
                        $id = $rec['user_id'];
                        }?>
                        
                        <script>
                        alert('Profile Succsessfully Updated');
                        window.location = "view_profile.php?id=<?php echo $id;?>";
                        </script>



<?php
}?>