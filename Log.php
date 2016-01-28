<?php

  Class Log {
    public $filename;

    public function logMessage($logLevel, $message) {

      date_default_timezone_set("America/Chicago");
      $dt = new DateTime();
      $logDate = $dt->format('Y-m-d H:i:s');

      $handle = fopen($this->filename, 'a');
      // do error messages here
      //YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE
      $msg = "{$logDate} [{$logLevel}] {$message}";
      fwrite($handle, PHP_EOL . $msg);
      fclose($handle);

    }

    public function info($message) {
      $this->logMessage("INFO", $message);
    }

    public function error($message) {
      $this->logMessage("ERROR", $message);
    }
  }
 ?>
