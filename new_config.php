<?php
require '../config.php';
$newConn = mysqli_connect($CFG->dbhost,$CFG->dbuser,$CFG->dbpass,$CFG->dbname);
// $newConn = mysqli_connect($CFG->dbhost,$CFG->dbuser,'123',$CFG->dbname);
// Check connection

if (mysqli_connect_errno($newConn)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

// $CFG->dbtype    = 'mysqli';
// $CFG->dblibrary = 'native';
// $CFG->dbhost    = 'localhost';
// $CFG->dbname    = 'moo34';
// $CFG->dbuser    = 'moo34';
// $CFG->dbpass    = 'xyUClAuRLXLaOcod';
// $CFG->prefix    = 'mdl_';
?>