<?php
require_once 'PHP/UML.php';

$uml = new PHP_UML(); 
$uml->setInput(array('./app/models','./app/controllers'));
$uml->parse();
$uml->export('html', './document');
?>