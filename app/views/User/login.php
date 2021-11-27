<html>

<head>
    <title>Login</title>
</head>

<body>
    <?php
    if ($data != null) {
        echo $data;
    }
    ?>
    <h1>Pitstop Car Wash</h1>
    <h3>Login</h3>
    <form action='' method='post'>
        Username: <input type='text' name='username' /><br>
        Password: <input type='password' name='password' /><br>
        <input type='submit' name='action' value='Login' />
    </form>

</body>

</html>