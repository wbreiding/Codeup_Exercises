<?php
Class Rectangle {

  private $height;
  private $width;

  public function __construct($height, $width) {
    $this->setHeight($height);
    $this->setWidth($width);
  }

  public function area() {
    $area = $this->getWidth() * $this->getHeight();
    return $area;
  }

  public function perimeter() {
    $perimeter = $this->getHeight() * 2 + $this->getWidth() *2;
    return $perimeter;
  }

  public function getHeight() {
    return $this->height;
  }

  public function getWidth() {
    return $this->width;
  }

  public function setHeight($height) {
    $this->height = trim($height);
  }

  public function setWidth($width) {
    $this->width = trim($width);
  }
}

 ?>
