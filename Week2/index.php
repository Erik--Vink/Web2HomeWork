<?php

include ('database.class.php');

$db = new database("wsphp");

$db->doSql("INSERT INTO gebruikers (geb_voornaam, geb_achternaam) VALUES('John', 'Doe')");

$db->doSql("Select * FROM gebruikers");
$result = $db->getRecord();

echo "<table cellpadding=\"2\" border=\"1\">";
echo "<tr><th>ID</th><th>Voornaam</th><th>Achternaam</th></tr>";

while ($row = $result->fetch_assoc())
{
    echo "<tr>";
    $id = $row["geb_id"];
    $geb_voornaam = $row["geb_voornaam"];
    $geb_achternaam = $row["geb_achternaam"];
    echo "<td>$id</td><td>$geb_voornaam</td><td>$geb_achternaam</td>";
    echo "</tr>";
}

echo "</table>";


?>