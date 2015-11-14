<?php 
	require_once('../includes/session.php');
	require_once('../includes/Layouts/header.php');
	require_once('../includes/functions.php');
	require_once('../includes/dbConnection.php');

	if(isset($_POST['name'])){
		$name = htmlentities($_POST['name']);
		$pass1 =htmlentities($_POST['password1']);
		$pass2 =htmlentities($_POST['password2']);
		$result = user_search($_POST['name']);
		if(!$result){
			if($pass1 == '' || $pass2 == ''){
				$message = 'Neįvedėte slaptažodžio';
			}else if( strlen($name) < 5){
				$message = 'Vartotojo vardas turi būti netrumpesnis nei 5 simboliai';
			}else if($pass1 != $pass2){
				$message = 'Nesutampa slaptažožiai, pakartokite';
			}else if($pass1 == $pass2 && strlen($name) > 5){
				$message = 'Vartotojas sėkmingai sukurtas';
				prideti_vartotoja($name, $pass1);
			}else{ $message = 'Klaida';}
		}
		if($result){ $message = 'Vartotojo vardas jau yra'; mysqli_free_result($result);}
	}
?>
<div class="pradzia" id="signIn">
	<div class="virsus"><h2>Prisijunkite</h2></div>
	<div class="apacia">
		<form action="operation.php" method="post">
			<br><br>
			<p>Vartotojas: 
				<input type="text" name="name" value=""/>
			</p><br><br>
			<p>Slaptažodis: 
				<input type="password" name="password" value=""/>
			</p><br><br>
			<input type="submit" name="submit" value="Prisijungti">
			&nbsp&nbsp&nbsp&nbsp
			<input id='eitiPgr' type="button" name="new" value="Sukurti vartotoją"
			>
		</form>
		<?php
			if(isset($message)){
				echo "<div class=\"message\">*{$message}</div>";unset($message);
			}else if(isset($_SESSION['message'])){
				$message = display_message();
				echo "<div class=\"message\">*{$message}</div>";unset($message);
			}
				
		?>
	</div>
</div>
<div class="pradzia" id="create">
	<div class="virsus"><h2>Naujas Vartotojas</h2></div>
	<div class="apacia">
		<form action="pagrindinis.php" method="post">
			<br><br>
			<p>Vartotojas: 
				<input type="text" name="name" value=""/>
			</p><br><br>
			<p>Slaptažodis: 
				<input type="password" name="password1" value=""/>
			</p><br>
			<p>Pakartokite: 
				<input type="password" name="password2" value=""/>
			</p><br><br>
			<input type="submit" name="submit" value="Sukurti">
			&nbsp&nbsp&nbsp&nbsp
			<input id='griztiPgr' type="button" name="new" value="Grįžti"
			>
		</form>
	</div>
</div>


<?php require_once('../includes/Layouts/footer.php'); ?>