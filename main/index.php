<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><C-xampp-htdoc-sister-server1></C-xampp-htdoc-sister-server1></title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <button type="button" class="toggle-button" onclick="login()">Login</button>
                <button type="button" class="toggle-button" onclick="register()">Register</button>
            </div>
            <form id="login" action="post" class="input-group">
                <input type="text" class="input-failed"placeholder="Username">
                <input type="password" class="input-failed"placeholder="Password">
                <input type="checkbox" class="check-box"><span>Remember me</span>
                <button type="submit" class="submit-button">Login</button>
            </form>
            <form id="register" action="post" class="input-group">
                <input type="text" class="input-failed"placeholder="Username">
                <input type="password" class="input-failed"placeholder="Password">
                <input type="email" class="input-failed"placeholder="Email">
                <input type="checkbox" class="check-box"><span>I agree to the trem & conditions</span>
                <button type="submit" class="submit-button">Register</button>
            </form    >
        </div>
    </div>

    </--Javascipt -->
    <script>
        var a = document.getElementById("login");
        var b = document.getElementById("register");
        var c = document.getElementById("button");

        function register(){
            a.style.left = "-400px";
            b.style.left = "50px";
            c.style.left = "110px";
        }
        function login(){
            a.style.left = "50px";
            b.style.left = "450px";
            c.style.left = 0 ;
        }



    </script>
</body>

</html>
