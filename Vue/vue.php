<html>
	<head>
		<title>Navigation</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
	
	<body>
		<form name="formulaire">
			<select id="Ingredient" name="ingredients" onChange="choixIngredient()">

<?php 
	
		//utilisation de fichie Donnees_inc
		include 'Donnees.inc.php';
		
		//option de premier categorie
		foreach($Hierarchie as $categorie=>$sous_categorie){
			echo '<option value="'.$categorie.'">'.$categorie.'</option>';
		}
	
	// Check connection
	/*	$mysqli=mysqli_connect('127.0.0.1', 'root', '') or die("Erreur de connexion");
	if ($mysqli->connect_error) {
		die("连接失败: " . $mysqli->connect_error);
	} 
	
	$sql = "SELECT * FROM region";
	$result = $mysqli->query($sql);
	
	if ($result->num_rows > 0) {
		// 输出数据
		while($row = $result->fetch_assoc()) {
			echo "id: " . "id";
		}
	} else {
		echo "0 结果";
	}
	$mysqli->close();
	*/
?>		

			</select>
			
			<script type="text/javascript">
				function choixIngredient(){
					var mySelect=document.getElementById("Ingredient").value;
					var tab=document.getElementById('sous_categorie_liste');
					tab.innerHTML+='<select name="sous_categories"><option value="1">Moselle</option>';
						/*	<option value="0"></option><option value="1">Moselle</option>
							<option value="2">Meurthe-et-moselle</option>
							<option value="3">Vosges</option><option value="4">Meuse</option>*/
							tab.innerHTML+='<option value="1">Moselle</option>';
					for (var i=>j in $Hierarchie){
						if(j = document.getElementById("Region")){
							for( var m=>n in j){
								
								tab.innerHTML+='<option value="0"></option><option value="1">Moselle</option>';
							}
						}
					}
					tab.innerHTML+='</select>';	
					tab.innerHTML+='<select name="departement"><option value="0"></option><option value="1">Bas-Rhin</option><option value="2">Haut-Rhin</option></select>';
				}
			</script>	
			
			<div id="sous_categorie_liste">
			</div>
		
		</form>
	</body>
</html>


<?php
class Vue{
	public function Afficher($output){
			echo $output;
	}
}
?>