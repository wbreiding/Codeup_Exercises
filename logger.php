<?php

function logMessage($logLevel, $message)
{
    // todo - complete this function
    //generate filename as log-YYYY-MM-DD.log
    date_default_timezone_set("America/Chicago");
    $dt = new DateTime();
    $date = $dt->format('Y-m-d');
    $logDate = $dt->format('Y-m-d H:i:s');

    $filename = "log-{$date}.log";
    $handle = fopen($filename, 'a');
    // do error messages here
    //YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE
    $msg = "{$logDate} [{$logLevel}] {$message}";
    fwrite($handle, PHP_EOL . $msg);
    fclose($handle);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an error message.");
