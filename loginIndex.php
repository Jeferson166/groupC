<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginStyle.css">

    <script>
        document.getElementById(greetings).innerHTML ="Welcome!";
    </script>

</head>
<body>
    <section class="section">
        <div class="row">
            <div class="container">
                <div class="iconContainer">
                    <div class="icon"></div>
                </div>
                <h1 id="greetings">Hello!</h1>
                <form action="">
                    <div class="input">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="loginButton">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
