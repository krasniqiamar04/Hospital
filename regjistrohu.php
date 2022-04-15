<?php include_once 'inc/header.php' ;
    include_once 'inc/sqlFunctions.php';
?>

<?php
if(isset($_POST['btn-regjistrohu'])){
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $telefoni = $_POST['telefoni'];
    $nrpersonal = $_POST['nrpersonal'];
    $datalindjes = $_POST['datalindjes'];
    $fjalekalimi = $_POST['fjalekalimi'];
    register($emri, $mbiemri, $email,$fjalekalimi, $telefoni, $nrpersonal, $datalindjes );
}
?>

<div class="loginForma container">
    <div class="formaLogin">
        <h1>Regjistrohu</h1>
        <form method="post" action="">
            <div>
                <input type="text" name="emri" placeholder="Emri"> <br>
                <input type="text" name="mbiemri" placeholder="Mbiemri">
            </div>
            <div>
                <input type="email" name="email" placeholder="email"> <br>
                <input type="password" name="fjalekalimi" placeholder="Password">
            </div>
            <div>
                <input type="tel" name="telefoni" placeholder="telefoni">
                <input type="number" name="nrpersonal" placeholder="Numri personal"> <br>
            </div>
            <div>
                <input type="date" name="datalindjes" placeholder="data e lindjes">
            </div>
            <div class="loginFormFooter">
                <button id="login" name="btn-regjistrohu">Regjistrohu</button>
            </div>
        </form>
    </div>
</div>