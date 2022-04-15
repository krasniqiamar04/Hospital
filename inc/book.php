<?php include_once 'inc/sqlfunctions.php' ?>
<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>Rezervo</span> tani </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>

    <?php
        if(isset($_POST['regjistro'])){
        $emri = $_POST['emri'];
        $telefoni = $_POST['telefoni'];
        $email = $_POST['email'];
        $dataterminit = $_POST['dataterminit'];
        shtoRezervim($emri, $telefoni, $email, $dataterminit);
        }
    ?>

        <form action="" method="post">
            <h3>Rezervo Termin</h3>
            <input type="text" name="emri" placeholder="Emri" class="box">
            <input type="number" name="telefoni" placeholder="Nr. i telefonit" class="box">
            <input type="email" name="email" placeholder="your email" class="box">
            <input type="date" name="dataterminit" class="box">
            <input type="submit" value="Regjistro" name="regjistro" class="btn">
        </form>

    </div>

</section>

<!-- booking section ends -->