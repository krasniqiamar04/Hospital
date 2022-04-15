<?php
include_once('../inc/sqlFunctions.php');

if (isset($_POST['shtoPerdorues'])) {
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $roli = $_POST['roli'];
    $nrpersonal = $_POST['nrpersonal'];
    $email = $_POST['email'];
    $datalindjes = $_POST['datalindjes'];
    shtoPerdorues($emri, $mbiemri, $roli, $nrpersonal, $email, $datalindjes);
}

if (isset($_POST['modifikoPerdorues'])) {
    $perdoruesiid = $_POST['perdoruesiid'];
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $telefoni = $_POST['telefoni'];
    $email = $_POST['email'];
    $datalindjes = $_POST['datalindjes'];
    modifikoKategori($perdoruesiid, $emri, $mbiemri, $telefoni, $email, $datalindjes);
}

if (isset($_POST['btnFshij'])) {
    $perdoruesiid = $_POST['perdoruesiid'];
    $result = fshijPerdorues($perdoruesiid);
    if($result){
        header("Location: ../perdoruesit.php");
    }
}
?>
