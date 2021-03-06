<html>

<head>
    <title>New Record for <?php echo $data['contractor']->company_name ?></title>
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
            <h2 class="title-text">New Record for <?php echo $data['contractor']->company_name ?></h2>
        </div>
    </center>

    <center>
        <div class="container-form" style="margin-top: 3vh">
            <div class="center-vertically">
                <?php
                if (isset($data['error'])) {
                    echo '<div class="alert alert-danger">' . $data['error'] . '</div>';
                }
                ?>
                <form action='' method='post'>
                    <label for="courtesy_number" class="form-label">Courtesy Number:</label><br>
                    <input type='text' name='courtesy_number' class='form-input' /><br>
                    <label for="car_specification" class="form-label">Car Specification:</label><br>
                    <input type='text' name='car_specification' class='form-input' /><br>
                    <label for="job_type" class="form-label">Type of Job:</label><br>
                    <input type='text' name='job_type' class='form-input' /><br>
                    <label for="date" class="form-label">Date:</label><br>
                    <input type='text' name='date' class='form-input' placeholder='Select a date' placeholder="Select a date" onfocus="(this.type='date')" /><br>
            </div>
            <input type='submit' class="form-button" name='action' value='Add new record' />
            </form>
        </div>
    </center>

</body>

</html>