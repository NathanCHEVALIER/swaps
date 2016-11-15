<?php

	$mister = 'AZERTY';
	$page = 'default';
	include('L2C14/6_6_16_17-41.php');

$reqmail = $bddL7C13->prepare("SELECT * FROM dactyle WHERE desopilant = :email AND diatribe = 'profil' AND dierese = 1");
$reqmail->execute(array('email' => $_POST['email']));
$mailexist = $reqmail->rowCount();
if($mailexist == 0)
{

}
else
{?>
	<div class="false_value">
	
		<img class="false_value_img" src="../images/fonctionnelles/false.png" alt="wrong cross" height="32px" />
		
		<div class="false_value_text" >L'email n'est pas libre - <a class="false_value_text_lien" href="manager/contacts.php?motif=revendiquer">Revendiquer</a></div>
		
	</div>

<?php
}
?>