<?php
require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);
$gift = $db->query("SELECT * FROM gifts")->fetchAll();

echo"<ul>";
foreach($gift as $iteam)
{
    echo "<li>". $iteam ["id"]." ". $iteam ["name"]." ". $iteam ["count_available"]." "."</li>";
}
echo"</ul>"; 