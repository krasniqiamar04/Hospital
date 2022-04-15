<?php include_once 'inc/header.php'?>
<?php include_once 'inc/sqlFunctions.php'?>

<section class="section-shto-modifiko container">
    <div class="image">
        <img src="img/clients.jpg" alt="">
    </div>
    <div class="forma">
        <br>
        <br>
        <br>
        <br>
        <br>
        <?php if (isset($_GET['perdoruesiid'])){?>
        <h1 style="text-align: center;">Forma per modifikimin e Perdoruesit</h1>
        <?php ?>
        <?php
            $perdoruesi =mysqli_fetch_assoc(merrRezervimId($_GET['perdoruesiid']));
        }?>
        <div class="loginForma container">
    <div class="formaLogin">
        <h1>Modifiko</h1>
        <?php
        
        if(isset($_GET['aid'])){
            $perdoruesiid=$_GET['aid'];
            $anetari=merrPerdoruesId($perdoruesiid);

            $emri=$anetari['emri'];
            $mbiemri=$anetari['mbiemri'];
            $telefoni=$anetari['telefoni'];
            $email=$anetari['email'];
            $fjalekalimi=$anetari['fjalekalimi'];
        }
        if (isset($_POST['modifiko'])) {
            modifikoPerdorues($_POST['perdoruesiid'],$_POST['emri'],$_POST['mbiemri'],$_POST['email'],$_POST['telefoni'],$_POST['fjalekalimi']);
        }
        ?>
        <form method="post" id="anetari" class="box" action="">
            <input type="hidden" id="perdoruesiid" name="perdoruesiid" 
                value="<?php if(!empty($perdoruesiid)) echo $perdoruesiid; ?>">
            <fieldset>
                <label>Emri: </label>
                <input type="text" id="emri" name="emri" 
                value="<?php if(!empty($emri)) echo $emri; ?>">
            </fieldset>
            <fieldset>
                <label>Mbimri: </label>
                <input type="text" id="mbiemri" name="mbiemri"
                value="<?php if(!empty($mbiemri)) echo $mbiemri; ?>">
            </fieldset>
            <fieldset>
                <label>Telefoni: </label>
                <input type="text" id="telefoni" name="telefoni"
                value="<?php if(!empty($telefoni)) echo $telefoni; ?>">
            </fieldset>
            <fieldset>
                <label>Email: </label>
                <input type="email" id="email" name="email"
                value="<?php if(!empty($email)) echo $email; ?>">
            </fieldset>
            <fieldset>
                <label>Fjalekalimi: </label>
                <input type="password" id="fjalekalimi" name="fjalekalimi"
                value="<?php if(!empty($fjalekalimi)) echo $fjalekalimi; ?>">
            </fieldset>
            <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
            <p id="errmessage"></p>
        </form>
    </div>
</div>
    </div>
</section>