<?php
require_once 'PHP/UML.php';

$importer = new PHP_UML_Input_PHP_FileScanner();
$importer->setDirectories(array('./app/models','./app/controllers'));
$importer->import();

$exporter = new PHP_UML_Output_Xmi_Exporter();
$exporter->setModel($importer->getModel());
$exporter->setXmiVersion(1);
$exporter->setEncoding('utf-8');
$exporter->setDeploymentView(true);
$exporter->setComponentView(true);
$exporter->export('./uml');
?>