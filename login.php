<?php include_once 'inc/header.php'; 
    include_once 'inc/sqlFunctions.php';
?>

<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $fjalekalimi = $_POST['fjalekalimi'];
    login($email, $fjalekalimi);
}
?>

    <div class="loginForma container">
        <div class="formaLogin">
            <h1>Login</h1>
            <form method="post" action="">
                <div>
                    <input type="text" name="email" placeholder="Email"> <br>
                    <input type="password" name="fjalekalimi" placeholder="Password">
                </div>

                <div class="loginFormFooter">
                    <span>Nuk keni akoma account? <br> <a href="regjistrohu.php">Regjistrohu</a></span> <br>
                    <button id="login" name="login">Login</button>
                </div>
            </form>
        </div>
    </div>