<?php include_once 'inc/sqlFunctions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probit Hospital</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-heartbeat"></i> Probit. </a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <?php if (isset($_SESSION['id']) && $_SESSION['roli'] == '0') : ?>
        <a href="rezervo.php">Rezervo</a>
        <a href="rezervimet.php">Rezervimet</a>
        <a href="logout.php">Logout</a>
        <?php elseif (isset($_SESSION['id']) && $_SESSION['roli'] == '1') : ?>
        <a href="perdoruesit.php">Perdoruesit</a>
        <a href="rezervo.php">Rezervo</a>
        <a href="rezervimet.php">Rezervimet</a>
        <a href="logout.php">Logout</a>
        <?php else : ?>
        <a href="rezervimet.php">Rezervimet</a>
        <a href="login.php">Login</a>
        <?php endif; ?>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->