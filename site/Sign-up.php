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
    <main>
        <div class="container">
            <div class="head">
                <h1>Sign up</h1>
            </div>
            <form class="form" action="verwerk-signup.php" method="post">
                <label for="txtEmail">E-mail:</label>
                <input type="text" id="txtEmail" name="txtEmail" placeholder="E-mail" autofocus>

                <label for="txtName">Username:</label>
                <input type="text" id="txtName" name="txtName" placeholder="Username" autofocus>

                <label for="txtPass">Password:</label>
                <input type="text" id="txtPass" name="txtPass" placeholder="Password" autofocus>

                <button class="signbutton" type="submit">Create</button>
            </form>
        </div>
    </main>

</body>

</html>