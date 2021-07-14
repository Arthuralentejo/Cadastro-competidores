<?php
include 'services/sessionMessage.php';
include 'services/dataValidation.php';
include 'services/serviceCategorize.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

categoriaCompetidor($nome,$idade);
header('location: index.php');