
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
                $location = $_POST['location'];
                $address = $_POST['address'];
                $company_email = $_POST['company_email'];
                $company_name = $_POST['company_name'];
                $company_phone = $_POST['company_phone'];
                $specialisation = $_POST['specialisation'];
                $company_website = $_POST['company_website'];
                $information = $_POST['information'];
                $vacancy = $_POST['vacancy'];
                $company_type = $_POST['company_type'];
                //$textarea = $_POST['textarea'];
               
                
$sql2="UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`username`='$username',`location`='$location',`address`='$address',`company_email`='$company_email',`company_phone`='$company_phone',`specialisation`='$specialisation',`company_website`='$company_website',`information`='$information', `vacancy`='$vacancy', `company_type`='$company_type', `company_name`='$company_name' WHERE `user_id`=$user_id"; 

 
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
                        window.location = "employer.php?id=<?php echo $id;?>";
                        </script>



<?php
}?>