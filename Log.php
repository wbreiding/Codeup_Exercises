<?php

  Class Log {
    private $filename;
    private $handle;

    public function __construct($prefix='log') {
      date_default_timezone_set("America/Chicago");
      $dt = new DateTime();
      $date = $dt->format('Y-m-d');

      $this->setFilename("{$prefix}-{$date}.log");
      $this->setHandle(fopen($this->filename, 'a'));

    }

    public function __destruct() {
      fclose($this->getHandle());

    }
    public function logMessage($logLevel, $message) {
      date_default_timezone_set("America/Chicago");
      $dt = new DateTime();
      $logDate = $dt->format('Y-m-d h:m:s');

      // do error messages here
      //YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE
      $msg = "{$logDate} [{$logLevel}] {$message}";
      fwrite($this->getHandle(), PHP_EOL . $msg);

    }

    public function info($message) {
      $this->logMessage("INFO", $message);
    }

    public function error($message) {
      $this->logMessage("ERROR", $message);
    }

    public function getFilename() {
      return $this->filename;
    }

    public function getHandle() {
      return $this->handle;
    }

    public function setFilename($filename) {
      $filename = trim($filename);
      if (is_string($filename) && touch($filename) && is_writable($filename)) {
            $this->filename = $filename;
      }
    }

    private function setHandle($handle) {
      $this->handle = $handle;
    }
  }
 ?>
