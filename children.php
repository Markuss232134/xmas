<?php
require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM children")->fetchAll();

echo"<ul>";
foreach($posts as $pos)
{
    echo "<li>" . $pos ["content"] . "</li>";
}
echo"</ul>"; 