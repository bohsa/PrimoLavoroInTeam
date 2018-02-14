<!doctype html>
<html>
<head>
<title>votazioni</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
 <meta name="application-name" content="votazione loghi"/>
<meta name="keywords" content="voto,icone,loghi,votazioni" />
<meta name="description" content="piattaforma di voto per le icone del progetto appenaposso" />
<meta name="msapplication-TileColor" content="#212121" />
<meta name="theme-color" content="#212121" />

<link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
<link href="resources/style.css" rel="stylesheet" />
<script src="resources/main.js"></script>
<?php
//stabilisco la connesessione col db
require "resources/CTDB.php";

mysqli_close($CTDB);
?>
</head>
<body>

<ul>
  <li><a class="active">votazioni</a></li>
  <li><a  href="#home">homepage</a></li>
  <li><a href="#contact">informazioni</a></li>
</ul>

<div class="descrizione">
<h1>descrizione del progetto</h1>
<p>altro testo da aggiungere sul progetto e le sue regole</p>
</div>

<div class="container">
	<div class="cards">
	
		<a class="card" onclick="opencard()">
			<?php
//scusa se ho modifcato un pochino ma devo capire come le variabili nella pagina...xD
			echo	"<span class="card-header" style="background-image: url($url1);">
				</span>
				<span class="card-summary">
					<span class="card-author">autore: nome cognome perona</span>
					<i>
						descrizione ridotta del logo qweqweqweqweqweqwe
					</i>
				<	br>
				</span>
				<span class="card-meta">
					clicca per votare
				</span>"
			?>
		</a>

		<a class="card" onclick="opencard()">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/200/animals);">
			</span>
			<span class="card-summary">
				<span class="card-author">autore: nome cognome perona lungo qweeeeee</span>
				<i>
					descrizione del logo qweqweqweqweqweqwe
				</i>
				<br>
			</span>
			<span class="card-meta">
				clicca per votare
			</span>
		</a>

		<a class="card" onclick="opencard()">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/200/animals);">
			</span>
			<span class="card-summary">
				<span class="card-author">autore: nome cognome perona lungo qweeeeee</span>
				<i>
					descrizione del logo qweqweqweqweqweqwe
				</i>
				<br>
			</span>
			<span class="card-meta">
				clicca per votare
			</span>
		</a>
		
		
		<a class="card" onclick="opencard()">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/200/animals);">
			</span>
			<span class="card-summary">
				<span class="card-author">autore: nome cognome perona lungo qweeeeee</span>
				<i>
					descrizione del logo qweqweqweqweqweqwe
				</i>
				<br>
			</span>
			<span class="card-meta">
				clicca per votare
			</span>
		</a>
		
		
		<a class="card" onclick="opencard()">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/200/animals);">
			</span>
			<span class="card-summary">
				<span class="card-author">autore: nome cognome perona lungo qweeeeee</span>
				<i>
					descrizione del logo qweqweqweqweqweqwe
				</i>
				<br>
			</span>
			<span class="card-meta">
				clicca per votare
			</span>
		</a>
			
		<a class="card" onclick="opencard()">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/200/animals);">
			</span>
			<span class="card-summary">
				<span class="card-author">autore: nome cognome perona lungo qweeeeee</span>
				<i>
					descrizione del logo qweqweqweqweqweqwe
				</i>
				<br>
			</span>
			<span class="card-meta">
				clicca per votare
			</span>
		</a>
			
		<a class="card" onclick="opencard()">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/200/animals);">
			</span>
			<span class="card-summary">
				<span class="card-author">autore: nome cognome perona lungo qweeeeee</span>
				<i>
					descrizione del logo qweqweqweqweqweqwe
				</i>
				<br>
			</span>
			<span class="card-meta">
				clicca per votare
			</span>
		</a>
			
		<a class="card" onclick="opencard()">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/200/animals);">
			</span>
			<span class="card-summary">
				<span class="card-author">autore: nome cognome perona lungo qweeeeee</span>
				<i>
					descrizione del logo qweqweqweqweqweqwe
				</i>
				<br>
			</span>
			<span class="card-meta">
				clicca per votare
			</span>
		</a>
	
		
		<a class="card" href="#">
			<span class="card-header" style="background-image: url(http://placeimg.com/400/400/tech);">
				<span class="card-title">
					<h3>This is a title for a card</h3>
				</span>
			</span>
			<span class="card-summary">
				questa era la card originale che ho spudoratamente copiato, che ora tengo per ricordo qui in fondo
			</span>
			<span class="card-meta">
				Published: June 18th, 2015
			</span>
		</a>
		
	</div>	
</div>

</body>
</html>