<?php

include ('database.class.php');

$db = new database("highscores");

$result = $db->doSql("Select * FROM player");

echo "<table cellpadding=\"2\" border=\"1\">";
echo "<tr><th>ISBN</th><th>TITEL</th></tr>";

while ($row = $result->fetch_assoc())
{
    echo "<tr>";
    $id = $row["id"];
    $voornaam = $row["voornaam"];
    echo "<td>$id</td><td>$voornaam</td>";
    echo "</tr>";
}

echo "</table>";


?>