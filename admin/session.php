<?php
session_start();
if (!isset($_SESSION['username'])){
	die("Access denied!");
};
?>