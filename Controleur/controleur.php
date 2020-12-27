
<?php
class Control{
	function AfficherControl(){
		require 'Vue/vue.php';
		require 'Modele/modele.php';
		$vue=new Vue();
		$modele=new Modele();
		$data=$modele->Getid('02');
		$vue->Afficher($data);
		$data=$modele->Getid('01');
		$vue->Afficher($data);
		$data=$modele->Getid('03');
		$vue->Afficher($data);
	}
}

?>