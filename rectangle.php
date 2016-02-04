<?php
Class Rectangle {

  public $height;
  public $width;

  public function __construct($height, $width) {
    $this->height = $height;
    $this->width = $width;
  }

  public function area() {
    $area = $this->width * $this->height;
    return $area;
  }
}

 ?>
