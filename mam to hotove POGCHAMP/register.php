<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<?php include("./parts/header.php")?>
<main class="container">

    <div class="container">

        <form action="./controlls/app/register.php" method="POST" class="form">

            <h1>Register</h1>

            <label for="meno"><b>Meno</b></label><br>
            <input type="name" placeholder="Zadaj meno" name="username" id="meno" required>
            <br>
            <label for="priezvisko"><b>Priezvisko</b></label><br>
            <input type="surname" placeholder="Zadaj priezvisko" name="surname" id="priezvisko" required>
            <br>
            <label for="email"><b>Email</b></label><br>
            <input type="mail" placeholder="Zadaj Email" name="email" id="email" required>
            <br>
            <label for="hesl"><b>Heslo</b></label><br>
            <input type="password" placeholder="Zadaj heslo" name="password" id="hesl" required>
            <br>
            <label for="kontrolahesl"><b>Potvrdenie hesla</b></label><br>
            <input type="password" placeholder="Znovu zadaj heslo" name="confirm_password" id="kontrolahesl" required>
            <br>
            <button type="submit" class="button">Registruj</button>

            <div class="containersignin">
                <p>Už máš účet? <a href="index.php">Prihlás sa!</a>.</p>
            </div>
        </form>
    </div>

    </main>    
<?php include('./parts/footer.php')?>

</html>