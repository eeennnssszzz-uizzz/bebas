<?php
require 'koneksi.php';

$id = $_GET['id'];
$pdo->query("DELETE FROM gajiPNS WHERE id=$id");

header("Location: index.php");
