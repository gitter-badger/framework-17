<?php
require_once __DIR__.'/vendor/autoload.php';
$bootstrap = new Bluejacket\Boot(array(
  "app" => "config/app.json",
  "database" => "config/database.json",
  "security" => "config/security.json",
  "types" => "config/types.json"
));
$bootstrap->dump();
?>
