<?php
session_start();
require_once("./config.php");

$id = $_POST['id'];

echo "{$id} deleted";
