<?php

echo "hello";

require('db.php');
require('fields.php');

$db = new db('mysql.aoproductions.net', 'aoproductions', 'Ih8ftp', 'aopoll');

//+ finance questions

$db->queryOne('DROP TABLE IF EXISTS poll2014');

$db->queryOne('CREATE TABLE IF NOT EXISTS poll2014 
                (response_id MEDIUMINT NOT NULL AUTO_INCREMENT, 
                 PRIMARY KEY response_id (response_id))');

foreach($yesNoQuestions as $yesno) {
  $db->queryOne('ALTER TABLE poll2014 ADD COLUMN '.$yesno.' BIT(1) NOT NULL');
}

foreach($textFields as $textField) {
  $db->queryOne('ALTER TABLE poll2014 ADD COLUMN '.$textField.' TEXT NOT NULL');
}

echo "hello";

?>
