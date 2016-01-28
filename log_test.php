<?php
require_once 'Log.php';

$log = new Log('cli');

$log->info("This is an info level message");
$log->error("This is an error!");
$log->logMessage("WARNING", "This is a warning message.");


 ?>
