<?php
$connector = new mysqli("localhost:3315", "root", "", "wad_modul4_alifah");

if (!$connector) {
  die("connector Gagal: " . $connector->connect_error);
}