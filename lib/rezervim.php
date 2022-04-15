<?php
include_once('../inc/sqlFunctions.php');

if (isset($_POST['shtoRezervim'])) {
    $emri = $_POST['emri'];
    $telefoni = $_POST['telefoni'];
    $email = $_POST['email'];
    $dataterminit = $_POST['dataterminit'];
    shtoRezervim($emri, $telefoni, $email, $dataterminit);
}

if (isset($_POST['modifikoRezervim'])) {
    $terminiid = $_POST['terminiid'];
    $emri = $_POST['emri'];
    $telefoni = $_POST['telefoni'];
    $email = $_POST['email'];
    $dataterminit = $_POST['dataterminit'];
    modifikoRezervim($terminiid, $emri, $telefoni, $email, $dataterminit);
}

if (isset($_POST['btnFshij'])) {
    $terminiid = $_POST['terminiid'];
    $result = fshijRezervim($terminiid);
    if($result){
        header("Location: ../rezervimet.php");
    }
}
?>