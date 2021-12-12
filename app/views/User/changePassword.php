<!DOCTYPE html>
<html lang="en">

<head>
    <title>Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="\app\css\styles.css" />
</head>

<body style="margin: 0; padding: 0;">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #b70f0a;" href="/User/index">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #b70f0a;" href="/Contractor/index">Contractors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #b70f0a;" href="/User/detailingCustomer" onclick="return false">Detailing Customers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #b70f0a;" href="/User/accountManagement">Account Management</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #b70f0a;" href="/User/logout">Logout</a>
        </li>
    </ul>

    <center style="margin-top: 2em;">
        <div class="title">
            <h2 class="title-text">
                <?php
                echo "<h1>Password change for {$_SESSION['first_name']} {$_SESSION['last_name']}</h1>"
                ?></h2>
        </div>
    </center>

    <?php
    if (isset($data['error'])) {
        echo $data['error'];
    }
    ?>

    <center>
        <div class="container-form" style="margin-top: 3vh">
            <div class="center-vertically">
                <form action='' method='post'>
                    <label for="current_password" class="form-label">Current password:</label><br>
                    <input type='password' name='current_password' class='form-input' /><br>
                    <label for="new_password" class="form-label">New password:</label><br>
                    <input type='password' name='new_password' class='form-input' /><br>
                    <label for="password_confirm" class="form-label">Password Confirmation:</label><br>
                    <input type='password' name='password_confirm' class='form-input' /><br>
            </div>
            <input type='submit' class="form-button" name='action' value='Update' />
            </form>
        </div>
    </center>
</body>

</html>