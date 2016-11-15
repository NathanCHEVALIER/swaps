<?php
	$mister = 'AZERTY';
	$page = 'default';
	include('L2C14/6_6_16_17-41.php');

$reqpseudo = $bddL7C13->prepare("SELECT * FROM dactyle WHERE decapode = :pseudo AND diatribe = 'profil' AND dierese = 1");
$reqpseudo->execute(array('pseudo' => $_POST['pseudo']));
$pseudoexist = $reqpseudo->rowCount();
if($pseudoexist == 0)
{

}
else
{?>
	<div class="false_value">
	
		<img class="false_value_img" src="../images/fonctionnelles/false.png" alt="wrong cross" height="32px" />
		
		<div class="false_value_text" >Le pseudo est déjà utilisé</div>
		
	</div>

<?php
}
?>