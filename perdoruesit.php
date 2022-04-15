<?php include_once 'inc/header.php' ;
    include_once 'inc/sqlFunctions.php';
?>
<br>
<section>
    <table id="table">
        <tr class="table-row">
            <th>Emri</th>
            <th>Mbiemri</th>
            <th>Telefoni</th>
            <th>Email</th>
            <th>Data e lindjes</th>
            <?php if (isset($_SESSION['id']) && $_SESSION['roli'] == '1') : ?>
            <th>Modifiko</th>
            <th>Fshiej</th>
            <?php endif; ?>
        </tr>
        <?php
        $perdoruesit = merrPerdoruesit();
        While ($perdoruesi = mysqli_fetch_assoc($perdoruesit)) :
        ?>
        <tr class="table-row">
            <td><?php echo $perdoruesi['emri']?></td>
            <td><?php echo $perdoruesi['mbiemri']?></td>
            <td><?php echo $perdoruesi['telefoni']?></td>
            <td><?php echo $perdoruesi['email']?></td>
            <td><?php echo $perdoruesi['datalindjes']?></td>
            <?php if (isset($_SESSION['id']) && $_SESSION['roli'] == '1') : ?>
            <td><a href="shto_modifiko_perdorues.php?aid=<?php echo $perdoruesi['perdoruesiid']?>"><i class="fas fa-edit"></i> Edit</a></td>
            <td id="fshiej">
                <form action="lib/perdorues.php" method="post">
                    <input type="text" name="perdoruesiid" hidden
                           value="<?php echo $perdoruesi['perdoruesiid'] ?>">
                    <button type="submit" style="border: none;background-color:transparent;cursor:pointer;"
                            name="btnFshij" onclick="return fshijPerdorues()">
                        <i class="fa fa-trash"></i> Delete
                    </button>
            </form>
                <script>
                    function fshijPerdorues() {
                        $confirm = confirm('A jeni te sigurt qe doni ta fshini perdorues?');
                        if ($confirm) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                </script>
            </td>
            <?php endif; ?>
            <?php endwhile; ?>
        </tr>
    </table>
    <a href="regjistrohu.php" class="shto-p"><i class="fas fa-plus"></i> Shto perdorues</a>
</section>