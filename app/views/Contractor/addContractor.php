<html>

<head>
    <title>New Contractor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="\app\css\styles.css" />
</head>

<body>
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

    <div class="title" style="text-align: left; margin: 2em 0em 2em 2em;">
        <h2>Adding a contractor</h2>
    </div>

    <center>
        <div class="container-form">
            <h1 class="form-title">New Contractor</h1>
            <div class="center-vertically">
                <?php
                if (isset($data['error'])) {
                    echo '<div class="alert alert-danger" role="alert">' . $data['error'] . '</div>';
                }
                ?>
                <form action='' method='post'>
                    <label for="company_name" class="form-label">Company name:</label><br>
                    <input type='text' name='company_name' class='form-input' /><br>
            </div>
            <input type='submit' class="form-button" name='action' value='Add' />
            </form>
        </div>
    </center>
    <!-- width: fit-content;
    text-align: left;
    margin: 0;
    position: absolute;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-100%); -->

</body>

</html>