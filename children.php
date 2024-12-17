<?php
require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);
$children = $db->query("SELECT * FROM children")->fetchAll();

echo"<ul>";
foreach($children as $kid)
{
    echo "<li>" . $kid ["firstname"]." ". $kid ["middlename"]." ". $kid ["surname"]." ". $kid["age"]." ". "</li>";
}
echo"</ul>"; 