<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account Management</title>
</head>

<body>
    <h1>Account Management</h1>
    <?php
    $type = ucfirst($_SESSION['type']);
    echo "<h2>$type</h2>"
    ?>
    <a href="/User/index">Home</a><br>
    <a href="/Contractor/index">Contractors</a><br>
    <a href="/User/detailingCustomer">Detailing Customers</a><br>
    <a href="/User/accountManagement">Account Management</a><br>
    <a href="/User/logout">Logout</a><br><br>

    <a href="/User/changePassword">Change password</a><br>
    <a href="/User/createtwofa">Set up 2-factor authentication</a><br>
    <a href="/User/addEmployee">Add Employee</a><br>
    <a href="/User/logout">Logout</a><br>
</body>

</html>