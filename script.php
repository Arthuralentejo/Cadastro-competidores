<?php
include 'services/serviceSession.php';
include 'services/dataValidation.php';
include 'services/serviceCategorize.php';

$name = $_POST["nome"];
$age = $_POST["idade"];


categorizeCompetitor($name,$age);
header('location: index.php');