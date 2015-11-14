<?php
	require_once('../includes/dbConnection.php');
	require_once('../includes/functions.php');	
	require_once('../includes/session.php');
	// PRISIJUNGIMAS
	if(isset($_POST['name']) && isset($_POST['password'])){
		$username = $_POST['name'];
		$password = $_POST['password'];
		if($username == '' || $password == ''){
			$_SESSION['message'] = 'Neįvestas vardas arba slaptažodis';
			redirect('pagrindinis.php');
			exit;
		}
		$result = user_search($username);
		if(!$result){
			$_SESSION['message'] = 'Vartotojas nerastas';
			redirect('pagrindinis.php');
		}
		while($user = mysqli_fetch_assoc($result)){
			if($password != $user['password']){
				$_SESSION['message'] = 'Netinkamas slaptažodis';
				redirect('pagrindinis.php');
			}
		}
		mysqli_free_result($result);
	}else{

		redirect('pagrindinis.php');
	}
	// HEADER IKELIMAS
	require_once('../includes/Layouts/header.php');
?>	
<img src="img/icon.png" class='icon'>
<div id='user' class='usr'>
	<p>Vartotojas: </p>
	<p><u id="vartotojas" ><?php if(isset($_POST['name'])){echo $_POST['name'];}
	else{echo 'Neprisijungęs';}?></u></p><br>
	<a href="pagrindinis.php">Atsijungti</a>
</div>

<div class="skirsniai">
	<ul id="sk">
		<il class="skirsnis active" rel='bendros'><img src="img/obuolys.png"><br/><p>Bendros</p> </il>
		<il class="skirsnis" rel='saldytuvas'><img src="img/saldytuvas.png"><br/><p>Šaldytuvas</p> </il>
		<il class="skirsnis" rel='indauja'><img src="img/puodyne.png"><br/><p>Indauja</p> </il>
		<il class="skirsnis" rel='buitis'> <img src="img/plaktukas.png"><br/><p>Buitis</p></il>
	</ul>
</div>


<?php
	lentele('bendros','Bendros', 'container on');
	lentele('saldytuvas','Šaldytuvas', 'container');
	lentele('indauja','Indauja', 'container');
	lentele('buitis','Buitis', 'container');
?>

<?php 
	require_once('../includes/Layouts/footer.php');	
?>