<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginStyle.css">

</head>
<body>
    <section class="section">
        <div class="row">
            <div class="container">
                <div class="iconContainer">
                    <div class="icon"></div>
                </div>
                <h1 id="greetings">Hello!</h1>
                <p id="test"></p>
                <form action="">
                    <div class="input">
                        <input type="text" placeholder="Email" id="email" required>
                    </div>
                    <div>
                        <input type="password" placeholder="Password" id="password" required>
                    </div>
                    <div class="loginButton">
                        <input type="submit" value="Login" id="bttn">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="/groupC/loginBehavior.js"></script>
<!--
    <script>
        document.getElementById("greetings").innerHTML = "Welcome!";
    </script>-->
</body>
</html>
