<?php 
	require_once('../includes/functions.php');
	require_once('../includes/dbConnection.php');

	if(isset($_POST['pirkiniai'])&&isset($_POST['vartotojas'])){
		$preke = htmlentities($_POST['pirkiniai']);
		$vartotojas = $_POST['vartotojas'];
		$klase = $_POST['klase'];
		prideti_preke($preke, $vartotojas, $klase);
		$result =  pirkiniai_search($vartotojas);
		$maxID = 0;
		while($pr = mysqli_fetch_assoc($result)){
			if($pr['id'] > $maxID){
				$maxID = $pr['id'];
			}
		}
		$mygtukas = "<img src='img/ok.png' onclick=\"var elementas = $(this).closest('li'); var url = 'processing.php'; var prekesID = elementas.attr('rel'); var yra = $(this).attr('src'); if(yra=='img/ok.png'){var src = 'img/bad.png'; this.src = src; $.post(url, {yra: 0, prekesID: prekesID}); }else{var src = 'img/ok.png'; this.src = src;$.post(url, {yra: 1, prekesID: prekesID});};\"/>";
		echo "rel='{$maxID}'> {$mygtukas} Prekė: <u>{$preke}</u>";

	}else if(isset($_POST['ID'])){
		preke_delete($_POST['ID']);
	}else if(isset($_POST['yra'])){
		saldytuvas_statusas($_POST['prekesID'], $_POST['yra']);
	}else{
		redirect('pagrindinis.php');
	}

?>