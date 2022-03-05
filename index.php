<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css" type="text/css">
</head>
<body>
    
    <mains>
        <section>
            <div class="center" style="border: 20px solid green; margin-top:10vh;">
                <h1>Login</h1>
                <form method="POST" action="insert1.php">
                    <div class="txt_field">
                        <input type="email" name="email" required>
                        <span></span>
                        <label class="label">Enter Your Email ID</label>
                    </div>
                    <div class="txt_field">
                        <input type="password" name="password" required>
                        <span></span>
                        <label class="label">Password</label>
                    </div>
                    <div class="pass">Forgot Password?</div>
                    <input id="submits" type="submit" value="Login">
                    <div class="sign_uplink">
                        Not a Member?<a href="Signup.html">Signup</a>
                    </div>

                </form>
            </div>

        </section>
    </mains>
</body>
</html>
