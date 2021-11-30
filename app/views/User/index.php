<html>

<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="\app\css\styles.css" />
</head>

<body>
    <!-- <a href="/User/index">Home</a><br>
    <a href="/Contractor/index">Contractors</a><br>
    <a href="/User/detailingCustomer">Detailing Customers</a><br>
    <a href="/User/accountManagement">Account Management</a><br>
    <a href="/User/logout">Logout</a><br> -->
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #e61610;" href="/User/index">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #e61610;" href="/Contractor/index">Contractors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #e61610;" href="/User/detailingCustomer">Detailing Customers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #e61610;" href="/User/accountManagement">Account Management</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #e61610;" href="/User/logout">Logout</a>
        </li>
    </ul>
    <center>
        <h1 class="login-title" style="color: black; margin-top: 10%;"><?php echo "Welcome {$_SESSION['first_name']} {$_SESSION['last_name']}!" ?></h1>
    </center>

    <!-- <h1></h1> -->




</body>

</html>