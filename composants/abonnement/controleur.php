<?php
if(!empty($_POST['type']) AND !empty($_POST['id_sujet']))
{
    $dir = __DIR__;
	$dir = explode('\composants', $dir);
	$path = $dir[0].'/L2C14/01_11_16_19-08.php';
	include("../../L2C14/01_11_16_19-08.php");
    
    $id = $_POST['id_sujet'];
	$req = $bddL7C13->prepare('SELECT * FROM clayette WHERE cnidaire = :id1 AND cocasse = :id2 AND cocufier = 1 AND coenzine = 1');
	$req->execute(array('id1' => $_SESSION['id'],
    					'id2' => $_POST['id_sujet']));
	$count = $req->rowCount();
	$donnees = $req->fetch();

	if($count > 0)
	{
        if($_POST['type'] == 1)
		{
		    $req2 = $bddL7C13->prepare('UPDATE clayette SET coenzine = 3 WHERE cnidaire = :id1 AND cocasse = :id2 ');
			$req2->execute(array('id1' => $_SESSION['id'],
								'id2' => $_POST['id_sujet'],
								));
			$update = $req2->fetch();
		}
		elseif($_POST['type'] == 2)
		{
			$req2 = $bddL7C13->prepare('UPDATE clayette SET cocufier = 2 WHERE cnidaire = :id1 AND cocasse = :id2 ');
			$req2->execute(array('id1' => $_SESSION['id'],
								'id2' => $_POST['id_sujet'],
								));
			$update = $req2->fetch();	
		}
		else
		{
		}
	}
	elseif($count == 0)
	{
        $req2 = $bddL7C13->prepare('INSERT INTO clayette (cnidaire, cocasse, cocufier, coenzine, collutoire) VALUES (:id1, :id2, 1, 1, NOW())');
		$req2->execute(array('id1' => $_SESSION['id'],
							'id2' => $_POST['id_sujet']
							));
		$insert = $req2->fetch();
	}
	else
	{

	}

    $reqabo = $bddL7C13->prepare('SELECT * FROM clayette WHERE cnidaire = :id1 AND cocasse = :id2 AND coenzine = 1 AND cocufier = 1');
    $reqabo->execute(array('id1' => $_SESSION['id'],
                            'id2' => $id,
                            ));
    $count123rf = $reqabo->rowCount();

    if($count123rf >= 1)
    {
        echo'Se désabonner';
    }
    else
    {
        echo'S\'abonner';
    }

}
else {

$reqabo = $bddL7C13->prepare('SELECT * FROM clayette WHERE cnidaire = :id1 AND cocasse = :id2 AND coenzine = 1 AND cocufier = 1');
$reqabo->execute(array('id1' => $_SESSION['id'],
						'id2' => $id,
						));
$count123rf = $reqabo->rowCount();

if($count123rf >= 1)
{
?>
	<div id="bouton_ajout_abo_<?php echo $id;?>">
		Se désabonner
	</div>
<?php
}
else
{
?>
	<div id="bouton_ajout_abo_2_<?php echo $id;?>">
		S'abonner
	</div>
<?php
}
?>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script>
    $(function() {
    	$(".liste_ajout_abo_<?php echo $id;?>").hide(600);
    	$(".bouton_abo_plus_<?php echo $id;?>").click( function(){
    		$(".liste_ajout_abo_<?php echo $id;?>").slideToggle(600);
    	});
    	$("#bouton_ajout_abo_<?php echo $id;?>").click(function(){
            $(this).load('/composants/abonnement/controleur.php', {type: 1, id_sujet: '<?php echo $id; ?>' });
		});
		$("#bouton_ajout_abo_2_<?php echo $id;?>").click(function(){
            $(this).load('/composants/abonnement/controleur.php', {type: 1, id_sujet: '<?php echo $id; ?>' });
		});
    });
</script>

<?php
}
?>