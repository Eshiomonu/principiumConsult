<?php

namespace PHPMailer\PHPMailer;

class PHPMailer
{
  public function __construct($e = false) {}
  public function isSMTP() {}
  public function setFrom($f, $n) {}
  public function addAddress($a) {}
  public function isHTML($b = true) {}
  public function Subject($s) {}
  public function Body($b) {}
  public function send() {}
}
