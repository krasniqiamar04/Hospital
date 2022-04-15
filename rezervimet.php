<?php include_once 'inc/header.php' ;
    // include_once 'inc/sqlFunctions.php';
?>
<br>
<section>
    <table id="table">
        <tr class="table-row">
            <th>Emri</th>
            <th>Telefoni</th>
            <th>Email</th>
            <th>Data</th>
            <?php if (isset($_SESSION['id']) && $_SESSION['roli'] == '1') : ?>
            <th>Modifiko</th>
            <th>Fshiej</th>
            <?php endif; ?>
        </tr>
        <?php
        $rezervimet = merrRezervimet();
        While ($rezervimi = mysqli_fetch_assoc($rezervimet)) :
        ?>
        <tr class="table-row">
            <td><?php echo $rezervimi['emri']?></td>
            <td><?php echo $rezervimi['telefoni']?></td>
            <td><?php echo $rezervimi['email']?></td>
            <td><?php echo $rezervimi['dataterminit']?></td>
            <?php if (isset($_SESSION['id']) && $_SESSION['roli'] == '1') : ?>
            <td><a name="modifikoRezervim" href="shto_modifiko_rezervim.php?terminiid=<?php echo $rezervimi['terminiid']?>"><i class="fas fa-edit"></i> Modifiko</a></td>
            <td id="fshiej">
                <form action="lib/rezervim.php" method="post">
                    <input type="text" name="terminiid" hidden
                           value="<?php echo $rezervimi['terminiid'] ?>">
                    <button type="submit" style="border: none;background-color:transparent;cursor:pointer;"
                            name="btnFshij" onclick="return fshijRezervim()">
                        <i class="fa fa-trash"></i> Delete
                    </button>
            </form>
                <script>
                    function fshijRezervim() {
                        $confirm = confirm('A jeni te sigurt qe doni ta fshini rezervim?');
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
    <?php if (isset($_SESSION['id']) && $_SESSION['roli'] == '1') : ?>
    <a href="rezervo.php" class="shto"><i class="fas fa-plus"></i> Rezervo termin</a>
    <?php endif; ?>
    <?php if (isset($_SESSION['id']) && $_SESSION['roli'] == '0') : ?>
    <a href="rezervo.php" class="shto"><i class="fas fa-plus"></i> Rezervo termin</a>
    <?php endif; ?>
</section>