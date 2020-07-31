<?php
error_reporting(0);//turning off error reporting
include("connect.php");
mysql_select_db('prof',mysql_connect('localhost','root',''))or die(mysql_error());

?>
<?php
SESSION_START();
?> 
<?php
$id = $_SESSION['user_id'];
?>           

<?php
    if (isset($_POST['send_message'])){
    
    $companyname=$_POST['companyname'];
    $recipient=$_POST['recipient'];
    $subject=strtoupper(addslashes($_POST['subject']));
    $sentdate=$_POST['sentdate'];
    $notification=$_POST['notification'];
    $emails=$_POST['emails'];
    $phones=$_POST['phones'];
    $locations=$_POST['locations'];
    $addressee=$_POST['addressee'];
    $sender=$_POST['sender'];
        /*$companyname=strtoupper(addslashes($_POST['companyname']));
        $recipient=strtoupper(addslashes($_POST['recipient']));
        $subject=strtoupper(addslashes($_POST['subject']));
        $sentdate=strtoupper(addslashes($_POST['sentdate']));
        $notification=strtoupper(addslashes($_POST['notification']));
        $senttime=strtoupper(addslashes($_POST['senttime']));*/
    $senttime=$_POST['senttime'];
    
    //$subject=$_POST['subject'];
    
    
    mysql_query("INSERT into notification (companyname,user_id, subject, notification, sentdate, senttime, locations , phones, emails, addressee, sender) values('$companyname','$recipient','$subject','$notification', '$sentdate', '$senttime', '$locations', '$phones', '$emails', '$addressee', '$sender')")or die(mysql_error());
    mysqli_query($db,$sql); 
    
    ?>
    <script>
alert('message Succsessfully send');
window.location = "view_clients.php <?php echo '?id='.$id; ?>";
</script>
<?php
}?>