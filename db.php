<?php
  // DB Credentials
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'brendoik');
  define('DB_PASSWORD', '123456');
  define('DB_NAME', 'php_learning');

  // Attempt to connect to MySQL
  try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  } catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
  }