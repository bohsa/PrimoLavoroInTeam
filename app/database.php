<?php
//crea la connessione al database, associata alla variabile $mysqly
$mysqli = new mysqli('localhost', 'username', 'password', 'nome_database');
    if ($mysqli->connect_error) {
        die('Errore di connessione (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
    } else {
        echo 'Connesso. ' . $mysqli->host_info . "\n";
    }
	
?>