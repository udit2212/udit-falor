<?php
ob_start();
session_start();
mysql_connect("localhost", "root", "12345");
mysql_select_db("formdata");
?>