<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            body {
                background-color: darkslategray;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            div {
                background-color: white;
                border: 5px solid;
                width: fit-content;
                padding: 25px 50px;
                margin: auto;
                margin-top: 50px;
            }
            h1 {
                text-align: center;
            }
            form {
                padding: 0px 0px 15px;
            }
        </style>
    </head>
    <body>
        <?php session_start(); ?>

        <div>
            <h1>LOGIN</h1>
            
            <!-- Get info -->
            <form action="handleForms.php" method="POST">
                <!-- Username -->
                <p>
                    <label for="tf_uName">Username: </label>
                    <input type="text" id="tf_uName" name="username">
                </p>
                
                <!-- Password -->
                <p>
                    <label for="tf_uPass">Password: </label>
                    <input type="password" id="tf_uPass" name="password">
                </p>

                <!-- Login -->
                <input type="submit" value="Login" id="loginBtn" name="btn_Login">
            </form>

            <!-- Logout -->
            <form action="unset.php" method="POST">
                <input type="submit" value="Logout" id="logoutBtn" name="btn_Logout">
            </form>

            <!-- Display information -->
            <?php
                if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
                    echo $_SESSION['login_msg'];
                }
            ?>
        </div>
    </body>
</html>