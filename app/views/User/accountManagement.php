<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account Management</title>
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
            <h2 class="title-text">Account Management</h2>
        </div>
    </center>

    <div class="title" style="margin-top: 1vh; margin-left: 3vw;">
        <h2 class="title-text">
            <?php
            $type = ucfirst($_SESSION['type']);
            echo "<h2>$type</h2>"
            ?>
        </h2>
    </div>

    <div style="margin-left: 3vw; margin-top: 3vh; display: inline-grid;">
        <a class="account-management-button" href="/User/changePassword">Change password</a><br>
        <a class="account-management-button" href="/User/createtwofa" onclick="return false">Set up 2-factor authentication</a><br>
        <a class="account-management-button" href="/User/addEmployee" onclick="return false">Add Employee</a><br>
        <a class="account-management-button" href="/User/logout">Logout</a><br>
    </div>

</body>

</html>