<?php
require_once 'Log.php';

$log = new Log();

date_default_timezone_set("America/Chicago");
$dt = new DateTime();
$date = $dt->format('Y-m-d');

$log->filename = "log-{$date}.log";
$log->info("This is an info level message");
$log->error("This is an error!");
$log->logMessage("WARNING", "This is a warning message.");


 ?>
