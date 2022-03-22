<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<?php include("./parts/header.php")?>
<div class="container">
        <h2>Prihlásenie</h2>
        <p>Pre prihlásenie vyplňte svoje prihlasovacie údaje.</p>
   

        <form action="./controlls/app/login.php" method="post">
           
                <label>Username</label><br>
                <input placeholder="Viliam" type="text" name="username">
                <br>
                <label>Password</label><br>
                <input placeholder="heslo123" type="password" name="password">
                <br>
                <button type="submit" class="button2" value="Login">Prihlásiť sa</button>

            <div class="containersignin">
                <p>Nemáš ešte účet? <br><a href="register.php">Registrovať sa!</a>.</p>
            </div>

        </form>
    </div> 
    </main>    
<?php include('./parts/footer.php')?>

</html>