<?php
	$val=1;
	setcookie('Patti_Cookie', $val , time() + (86400 * 7), "/"); //setto nome_cookies a valore (val) e il tempo per il quale deve esistere il cookie
?>
<!DOCTYPE html>
<head>
	<title>Personal Website</title>
	<link href="stile1.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="header">
		<h1>Benvenuti al mio sito</h1>
	</div>
	
	<div class="colonna_sx">
		C'era una volta...<br>
		- Un re! - diranno subito i miei piccoli lettori.<br>
		No, ragazzi, avete sbagliato. C'era una volta un pezzo di legno.<br>
		Non era un legno di lusso, ma un semplice pezzo da catasta, di quelli che 
		d'inverno si mettono nelle stufe e nei caminetti per accendere il fuoco e per 
		riscaldare le stanze.<br>
		Non so come andasse, ma il fatto gli &egrave; che un bel giorno questo pezzo 
		di legno capit&ograve; nella bottega di un vecchio falegname, il quale aveva 
		nome mastr'Antonio, se non che tutti lo chiamavano maestro Ciliegia, 
		per via della punta del suo naso, che era sempre lustra e paonazza, come una 
		ciliegia matura.<br>
		Appena maestro Ciliegia ebbe visto quel pezzo di legno, si rallegr&ograve; 
		tutto e dandosi una fregatina di mani per la contentezza, borbott&ograve a mezza voce:<br>
		- Questo legno &egrave; capitato a tempo: voglio servirmene per fare una 
		gamba di tavolino.<br>
		Detto fatto, prese subito l'ascia arrotata per cominciare a levargli la 
		scorza e a digrossarlo, ma quando fu l&igrave; per lasciare andare 
		la prima asciata, rimase col braccio sospeso in aria, perch&eacute; sent&igrave;
		una vocina sottile, che disse raccomandandosi:<br>
		- Non mi picchiar tanto forte!<br>
		Figuratevi come rimase quel buon vecchio di maestro Ciliegia!
	</div>
	
	<div class="colonna_dx">
		<h2 style="">Sezioni !</h2>
	</div>
	
	<div class="footer">
	<?php
		if(!isset($_COOKIE['Patti_Cookie'])) {
		{
			echo "Primo accesso dell'utente!";
			$val++;
		}
		} else {
			$val= ++ $_COOKIE['Patti_Cookie'];
			setcookie('Patti_Cookie',$val,time() + (86400 * 7), "/");
			echo "Cookie settato!<br>";
			echo "Numero degli accessi: " .$_COOKIE['Patti_Cookie'];
		}
	?>
	</div>
	
</body>