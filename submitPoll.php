<?php

require('fields.php');

$valid = true;
$valuesToInsert = '';
$insertString = '';

foreach($artists as $artist) {
  if(!isset($_POST[$artist])) { 
    $valid = false; 
    echo "Request missing parameter " . $artist . "<br>";
  }
  else {
    $valuesToInsert .= $artist . ', ';
    $insertString .= $_POST[$artist] . ', ';
  }
}

foreach($textFields as $textField) {
  if(!isset($_POST[$textField])) {
    $valid = false; 
    echo "Request missing parameter " . $textField . "<br>";
  }
  else {
    $valuesToInsert .= $textField . ', ';
    $insertString .= $_POST[$textField] . ', ';
  }
}

if(!$valid) {
  http_response_code(400);
  echo 'INSERT INTO poll2014 ('. trim($valuesToInsert, ', ') .') VALUES (' . trim($insertString, ', ') . ')';
  die();
}

//TODO: now actually do the things.

require('db.php');
$db = new db('mysql.aoproductions.net', 'aoproductions', 'Ih8ftp', 'aopoll');

$db->queryOne('INSERT INTO poll2014 
                ('. trim($valuesToInsert, ', ') .') 
                VALUES (' . trim($insertString, ', ') . ')');

http_response_code(200);
echo "Successfully added a poll response.";

?>