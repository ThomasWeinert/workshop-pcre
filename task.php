<?php
$file = $_GET['file'] ?? '';
if (preg_match('((./)?tasks/[^/?#]+)', $file)) {
  readfile($_GET['file']);
}
