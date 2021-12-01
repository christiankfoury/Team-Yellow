<html>

<head>
    <title>Delete Contractor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="\app\css\styles.css" />
</head>

<body>
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

    <div class="title" style="text-align: left; margin: 2em 0em 2em 2em;">
        <h2>Delete Contractor</h2>
    </div>

    <center>
        <h2>
            <img src="/app/uploads/warning.png" alt="" class="warning">
            Are you sure you want to delete <?php echo $data['contractor']->company_name; ?> as a contractor and delete its records?<br>
            Note that clicking yes is a irreversible action
        </h2>
        <form action='' method='post'>
            <input type='submit' name='yes' value="Yes, I am sure" class="are-you-sure" style="background: #72bb53;" />
            <input type='submit' name='no' value='No, go back' class="are-you-sure" style="background: #e61610;" />
        </form>
    </center>


</body>

</html>