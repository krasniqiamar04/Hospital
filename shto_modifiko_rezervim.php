<?php include_once 'inc/header.php'?>
<?php include_once 'inc/sqlFunctions.php'?>

<section class="book" id="book">

    <h1 class="heading"> <span>Rezervo</span> tani </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>
        <?php
            $termini =mysqli_fetch_assoc(merrRezervimId($_GET['terminiid']));
        ?>
        <?php
        
        if(isset($_GET['terminiid'])){
            $terminiid=$_GET['terminiid'];
            $anetari=merrRezervimId($terminiid);

            $emri = $anetari['emri'];
            $telefoni = $anetari['telefoni'];
            $email = $anetari['email'];
            $dataterminit = $anetari['dataterminit'];
        }
        if (isset($_POST['modifiko'])) {
            modifikoRezervim($_POST['terminiid'],$_POST['emri'],$_POST['telefoni'],$_POST['email'],$_POST['dataterminit']);
        }
        ?>

        <form action="" id="anetari" method="post">
            <h3>Modifiko Termin</h3>
            <input type="hidden" id="terminiid" name="terminiid" 
                value="<?php if(!empty($terminiid)) echo $terminiid; ?>">
            <input type="text" name="emri" placeholder="Emri" class="box" value="<?php if(!empty($emri)) echo $emri; ?>">
            <input type="number" name="telefoni" placeholder="Nr. i telefonit" class="box" value="<?php if(!empty($telefoni)) echo $telefoni; ?>">
            <input type="email" name="email" placeholder="your email" class="box" value="<?php if(!empty($email)) echo $email; ?>">
            <input type="date" name="dataterminit" class="box" value="<?php if(!empty($dataterminit)) echo $dataterminit; ?>">
            <input type="submit" value="Modifiko" name="modifiko" class="btn">
        </form>

    </div>

</section>