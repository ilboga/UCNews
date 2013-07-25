<?php
$db_host = 'localhost';
$db_user = 'lapagoda_won';
$db_password = 'mypassword';
$db_name = 'lapagoda_cernobbio';

echo 'trying to connect aruba mysql service';
$db = mysql_connect($db_host, $db_user, $db_password) or die ('Errore durante la connessione');
mysql_select_db($db_name, $db) or die ('Errore durante la selezione del db');
echo "Connection Done"
?>
