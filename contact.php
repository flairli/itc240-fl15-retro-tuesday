<?php include'includes/config.php';?>
<?php include'includes/header.php';?>
<h1><?=$pageID?></h1>

<?php
if(isset($_POST['Submit']))

{//if data, process it! 
 /*echo'<pre>';
 var_dump($_POST);
 echo '</pre>'; */
$to='hli00031@seattlecentral.edu';
$message = process_post();
$subject='Contact From from retro site';    

    safeEmail($to, $subject, $message);

}else{//no data,show form 
echo'
<form method="post" action="">
Name: <input type="text" name="Name" required="required" /><br/>
Email: <input type="email" name="Email" required="required" /><br/>
Comments:<textarea name="Comments"></textarea><br/>
<input type ="submit" value="Send" name="submit"/>
</form>

';

}
?>
<?php include 'includes/footer.php';?>