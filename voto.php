<?php
include 'app/database.php';
/*TO DO:
-sanitizzazione (r6,7)
-completare l url (r13)
-cambiare email mittente (r 17)
-inserire url di voto nel caso di email usata (r 32)
-aggiungere elseif nel caso la mail ce ma non è stata verificata.[tasto invia mail]
*/
$emailDestinatario = $_POST['email'];
$imgScelta = $_POST['imgScelta'];
$controlloMail = mysqli_query('SELECT * FROM votanti WHERE email='.$emailDestinatario);
//generare casualmente l ID
$ID = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
//aggiungere il nome della pagina che salvera i dati dopo la conferma mail
$linkDiConferma = 'conferma.php?ID='.$ID;
//inserire i vari valori appena si ricevono i dati del server
$nomeMittente = 'Ricibo';
$emailMittente = 'email@server.com';
$emailOggetto = 'Conferma voto del logo ricibo';
$emailCorpo = 'Per confermare il tuo voto clicca sul seguente link: '.$linkDiConferma;
$emailHeader = 'From: '.$nomeMittente.' <' .  $mailMittente . '>\r\n Reply-To: ' .  $mailMittente . '\r\n X-Mailer: PHP/' . phpversion();
?>
<html>
<body>
<?php
if ($controlloMail == NULL){
	//viusalizza messaggio d'errore, da aggiungere l url per tornare ala pagina delle votazioni.
	echo '
	<p>
	Errore si ha gia votato utilizzando questa mail.
	</p>
	<a href=" url da inserire">Tornare indietro</a>	';	
	}
	else{
	mysqli_query('INSERT INTO votanti (email,ID,data,verifcato,nomeVotato) VALUES ()');
	mail($email,$emailOggetto,$emailCorpo,$emailHeader);
	echo 'mail inviata clicca sul link al suo interno per confermare il voto';
	}
?>

</body>
</html>