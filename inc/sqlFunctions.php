<?php
session_start();
function connection()
{
    $dbcon = mysqli_connect('localhost', 'root', '', 'hospital');
    if (!$dbcon) {
        die(mysqli_error($dbcon));
    }
    return $dbcon;
}

function register($emri, $mbiemri, $email, $fjalekalimi, $nrpersonal, $telefoni, $datalindjes)
{
    $dbcon = connection();

    $sql = "SELECT * FROM perdoruesit WHERE email = '$email'";
    $result = mysqli_query($dbcon, $sql);
    if ($result) {
        if (mysqli_num_rows($result) == 0) {
            $sql = "INSERT INTO perdoruesit(emri, mbiemri, email, fjalekalimi, nrpersonal, telefoni, datalindjes, roli)";
            $sql .= " VALUES('$emri','$mbiemri','$email','$fjalekalimi',$nrpersonal, '$telefoni','$datalindjes','0')";
            $result1 = mysqli_query($dbcon, $sql);
            if($result1) {
                header('Location: login.php');
            }
        } else {
            echo "<script>alert('Ekziston nje llogari me kete email!');</script>";
        }
    }
}

function login($email, $fjalekalimi){
    $dbcon = connection();
    $sql = "SELECT * FROM perdoruesit WHERE email = '$email'";
    $result = mysqli_query($dbcon, $sql);
    if ($result) {
        $res = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) == 1) {
            if ($fjalekalimi === $res['fjalekalimi']) {
                
                $_SESSION['id'] = $res['perdoruesiid'];
                $_SESSION['emri'] = $res['emri'];
                $_SESSION['mbiemri'] = $res['mbiemri'];
                $_SESSION['roli'] = $res['roli'];
                header('Location: index.php');
                
            }else {
                
                echo "<script>alert('Email ose Password nuk jane ne rregull!');</script>";
            }
        }
    }
}

function merrPerdoruesit()
{
    $dbcon = connection();
    $sql = "SELECT * FROM perdoruesit";
    $result = mysqli_query($dbcon, $sql);
    return $result;
}

function merrPerdoruesId($perdoruesiid)
{
    $dbcon = connection();
    $sql = "SELECT perdoruesiid,emri,mbiemri,email,telefoni,fjalekalimi FROM perdoruesit";
    $sql.= " WHERE perdoruesiid={$perdoruesiid}";
    $result = mysqli_query($dbcon, $sql);
    return $anetari=mysqli_fetch_assoc($result);
}

function modifikoPerdorues($perdoruesiid,$emri,$mbiemri,$email,$telefoni,$fjalekalimi)
{
    $dbcon = connection();
    $sql = " UPDATE perdoruesit SET emri='$emri', mbiemri='$mbiemri', email='$email',telefoni='$telefoni',fjalekalimi='$fjalekalimi' WHERE perdoruesiid=$perdoruesiid";
    $result = mysqli_query($dbcon, $sql);
    if ($result) {
        header('Location: perdoruesit.php');
    }
}

function fshijPerdorues($perdoruesiid)
{
    $dbcon = connection();
    $sql = "DELETE FROM perdoruesit WHERE perdoruesiid = $perdoruesiid";
    $result = mysqli_query($dbcon, $sql);
    return $result;
}

function shtoPerdorues($emri, $mbiemri, $roli, $nrpersonal, $email, $datalindjes)
{
    $dbcon = connection();
    $sql = "INSERT INTO perdoruesit(emri, mbiemri, roli, nrpersonal, email, datalindjes) VALUES('$emri', '$mbiemri', '$roli', '$nrpersonal', '$email', '$datalindjes')";
    $result = mysqli_query($dbcon, $sql);
    if ($result) {
        header('Location: ../perdoruesit.php');
    }
}

function merrRezervimet()
{
    $dbcon = connection();
    $sql = "SELECT * FROM terminet";
    $result = mysqli_query($dbcon, $sql);
    return $result;
}

function merrRezervimId($terminiid)
{
    $dbcon = connection();
    $sql = "SELECT * FROM terminet WHERE terminiid = $terminiid";
    $result = mysqli_query($dbcon, $sql);
    return $result;
}

function modifikoRezervim($terminiid, $emri, $telefoni, $email, $dataterminit)
{
    $dbcon = connection();
    $sql = "UPDATE terminet SET emri = '$emri', telefoni = '$telefoni', email = '$email', dataterminit = '$dataterminit' WHERE terminiid = '$terminiid'";
    $result = mysqli_query($dbcon, $sql);
    if ($result) {
        header('Location: ../rezervimet.php');
    }

}

function shtoRezervim($emri, $telefoni, $email, $dataterminit){
    $dbcon = connection();
    $sql = "INSERT INTO terminet(emri, telefoni, email, dataterminit) VALUES('$emri', '$telefoni', '$email', '$dataterminit')";
    $result = mysqli_query($dbcon, $sql);
    if ($result) {
        header('Location: rezervimet.php');
    }
}

function fshijRezervim($terminiid)
{
    $dbcon = connection();
    $sql = " DELETE FROM terminet WHERE terminiid = $terminiid ";
    $result = mysqli_query($dbcon, $sql);
    return $result;
}
?>


