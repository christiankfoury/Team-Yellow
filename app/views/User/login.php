<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="\app\css\styles.css" />
</head>

<body id="login">
    <?php
    if ($data != null) {
        echo $data;
    }
    ?>

    <div class="white-box">
        <center>
            <h1 class="login-title">Pitstop Car Wash - Login</h1>
        </center>
        <center class="center-x-y">
            <div style="width: fit-content; text-align: left">
                <form action='' method='post'>
                    <label class="login" for="username">Username:</label><br>
                    <input type='text' class="login" name='username' placeholder=" Username" /><br><br><br>
                    <label class="login" for="password">Password:</label><br>
                    <input type='password' class="login" name='password' placeholder=" Password" /><br><br>
                    <div style="text-align: center;">
                        <input type='submit' class="login-button" name='action' value='Login' />
                    </div>
                </form>
            </div>

        </center>

    </div>



</body>

</html>