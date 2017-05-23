<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welkom op de login pagina!</title>
    <link rel="stylesheet" href="http://192.168.2.129/~user/CodeIgniterProductieFuncties/assets/css/style2.css">


</head>

<body>

<script>alert("incorrect login!")</script>

<form onsubmit="validateForm()" method="POST" id="loginForm" name="loginForm">
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">

                <input name="username" type="text" placeholder="username" id="username" style="border-bottom: solid 2px lightgray"/>
                <div class="help">At least 6 character</div>
                <input type="password" placeholder="password" id="password" name="password">
                <div class="help">Use upper and lowercase letters as well</div>
                <button class="btn btn-info btn-block login" type="submit"
                ">Login</button>

            </div>
        </div>

    </div>
</form>
</body>
</html>
