<html>

<head>
    <title>Home</title>
</head>

<body>

    <h1><?php echo "Welcome {$_SESSION['first_name']} {$_SESSION['last_name']}!" ?></h1>
    
    <a href="/User/index">Home</a><br>
    <a href="/Contractor/index">Contractors</a><br>
    <a href="/User/detailingCustomer">Detailing Customers</a><br>
    <a href="/User/accountManagement">Account Management</a><br>
    <a href="/User/logout">Logout</a><br>

</body>

</html>