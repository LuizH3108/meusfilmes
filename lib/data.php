<?php
   $db_host = "localhost";
   $db_login = "root";
   $db_password = "abc123*";
   $db_db = "meusfilmes";

   $conn = new mysqli($db_host, $db_login, $db_password, $db_db);
   if ($conn->connect_error) die($conn->connect_error);
?>
