<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'compents/header.php' ?>
    <main>
        <div class="container">
            <div class="containerin">
                <div class="head">
                    <h1>Sign in</h1>
                </div>
                <form action="verwerk-signin.php" method="post">
                    <label for="txtEmail">E-mail:</label>
                    <input type="text" id="txtEmail" name="email" placeholder="E-mail" autofocus>

                    <label for="txtPass">Password:</label>
                    <input type="text" id="txtPass" name="password" placeholder="Password" autofocus>

                    <button class="signbutton" type="submit">Sign-in</button>
                </form>
            </div>
        </div>
    </main>

</body>

</html>