<?php 


function redirect($location){
	header('Location: '.$location);
	exit;
}

function user_search($username){
	global $connection;
	$query  = 'SELECT * FROM vartotojai WHERE username = \'';
	$query .= $username;
	$query .= '\';';
	$result = mysqli_query($connection, $query);
	if(!$result|| mysqli_num_rows($result) == 0){
		return null;
	}else{
		return $result;
	}
}
function pirkiniai_search($username){
	global $connection;
	$query  = 'SELECT * FROM prekes WHERE user = \'';
	$query .= $username;
	$query .= '\';';
	$result = mysqli_query($connection, $query);
	if(!$result){
		return null;
	}else{
		return $result;
	}
}
function preke_delete($id){
	global $connection;
	$query  = 'DELETE FROM saldytuvas WHERE id = \'';
	$query .= $id;
	$query .= '\';';
	$result = mysqli_query($connection, $query);
	if(!$result){
		return null;
	}else{
		return $result;
	}
}
function prideti_preke($preke, $user, $klase){
	global $connection;
	$query  = 'INSERT INTO saldytuvas (name, user, type, yra)';
	$query .= "	VALUES ('{$preke}', '{$user}', '{$klase}', 1);";
	$result = mysqli_query($connection, $query);
	if(!$result){
		return null;
	}else{
		return $result;
	}
}
function prideti_vartotoja($user, $pass){
	global $connection;
	$query  = 'INSERT INTO vartotojai (username, password)';
	$query .= "	VALUES ('{$user}', '{$pass}');";
	$result = mysqli_query($connection, $query);
	if(!$result){
		return null;
	}else{
		return $result;
	}
}

function saldytuvas_search($username, $type){
	global $connection;
	$query  = 'SELECT * FROM saldytuvas WHERE user = \'';
	$query .= $username;
	$query .= '\' and type=\'';
	$query .= $type;
	$query .= '\';';
	$result = mysqli_query($connection, $query);
	if(!$result){
		return null;
	}else{
		return $result;
	}
}
function saldytuvas_statusas($id, $yra){
	global $connection;
	$query  = 'UPDATE saldytuvas ';
	$query .= 'SET yra = ';
	$query .= $yra;
	$query .= ' WHERE id = ';
	$query .= $id.';';
	mysqli_query($connection, $query);
}


function lentele($id, $name, $klase){
	echo"<div id=\"{$id}\" class='{$klase}'>";
		echo"<div class='virsus'><h2>{$name}</h2></div>";
		echo"<div class='apacia'>";
			echo"<ul id = 'list_{$id}' class='sarasas'>";
					if(isset($_POST['name'])){
						$result = saldytuvas_search($_POST['name'], $id);
						if($result){
							while($preke = mysqli_fetch_assoc($result)){
								echo "<li class='elementas' rel='{$preke['id']}'><input type='button' class='close' rel='{$id}' value='X'>";
								if($preke['yra']==0){
									echo "<img src='img/bad.png'/>";
								}else{
									echo "<img src='img/ok.png'/>";
								}
								echo " Prekė: ";
								echo "<u> {$preke['name']} </u>";
								echo "</li>";
							}
							echo '</ul>';
						}else{
							echo '</ul><br/><br/><p>Prekių nėra</p>';
						}
						mysqli_free_result($result);
					}
				if(!isset($_POST['name'])){
					echo '<br/><br/><p> Neprisijungęs vartotojas </p>';
				}
		echo "</div>";
	
		echo "<div class='bottom' rel='{$id}'>";
			echo "<p>Prekė:  &nbsp&nbsp&nbsp&nbsp";
			echo "<input id='in_{$id}' type='text' name='preke' value='' class='text_box'> &nbsp&nbsp&nbsp&nbsp ";
			echo "<input class='pridetiLI' rel='{$id}' type='submit' name='submit' value='Pridėti'></p>";
		echo "</div>";
	echo "</div>";
}

 ?>