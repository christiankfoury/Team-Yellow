<html>

<head>
    <title>Records for <?php echo $data['contractor']->company_name ?></title>
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
    <div style="margin-top: 2em; margin-left: 2em;">
        <div class="title">
            <h2>Records for <?php echo $data['contractor']->company_name ?></h2>
        </div>
    </div>
    <!-- <h1></h1> -->

    <a href="/ContractorCarRecord/addRecord/<?php echo $data['contractor']->contractor_id ?>}">Add new record for <?php echo $data['contractor']->company_name; ?></a><br><br>
    <!-- <div class="container">
        <div class="row row-margin-05" style='background:yellow;'>
            <h1>Row 1</h1>
        </div>
        <div class="row row-margin-05" style='background:skyblue;'>
            <h1>Row 2</h1>
        </div>
        <div class="row row-margin-05" style='background:gray;'>
            <h1>Row 3</h1>
        </div>
        <div class="row row-margin-05" style='background:skyblue;'>
            <h1>Row 4</h1>
        </div>
    </div> -->



    <?php
    if (isset($data['error'])) {
        echo "<h3>{$data['error']}</h3>";
    }
    ?>

    <form action='' method='post' class="left-form">
        Search by courtesy number: <input type='text' name='courtesy_number' placeholder="Courtesy Number" />
        <input type='submit' name='action' value='Search' />
    </form>

    <form action='' method='post' class="right-form">
        Filter from
        <input type='text' name='starting_date' placeholder="Select a date" onfocus="(this.type='date')" />
        to
        <input type='text' name='ending_date' placeholder="Select a date" onfocus="(this.type='date')" />
        <input type='submit' name='action2' value='Filter' />
    </form>


    <center>
        <table class="contractorCarRecord">;
            <tr>
                <th>Courtesy Number</th>
                <th>Car Specification</th>
                <th>Type of Job</th>
                <th>Date</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </table>
        <?php
        if ($data['records'] != null) {
            echo "<table class=\"carRecordData\">";
            foreach ($data['records'] as $record) {
                echo "<tr>";
                echo "<td class='borderStyleCarRecord'>" . $record->courtesy_number . "</td>";
                echo "<td>" . $record->car_specification . "</td>";
                echo "<td>" . $record->job_type . "</td>";
                echo "<td>" . $record->date . "</td>";
                echo "<td><a href='/ContractorCarRecord/editRecord/" . $record->contractor_car_record_id . "'>Edit</a></td>";
                echo "<td><a href='/ContractorCarRecord/deleteRecord/{$data['contractor']->contractor_id}/" . $record->contractor_car_record_id . "'>Delete</a></td>";
                // echo "<a href='/ContractorCarRecord/index/{$contractor->contractor_id}'>{$contractor->company_name}</a><br>";
                // echo "<a href='/Contractor/areYouSureDelete/{$contractor->contractor_id}/{$contractor->company_name}'>Delete</a><br><br>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </center>
    <!-- </table> -->
    <!-- <center>
        <table class="contractorCarRecord">
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
            </tr>
        </table>
        <table class="carRecordData">
            <tr>
                <td class="borderStyleCarRecord">10001</td>
                <td>Thomas</td>
                <td>M</td>
                <td>32</td>
            </tr>
            <tr>
                <td class="borderStyleCarRecord">10002</td>
                <td>Sally</td>
                <td>F</td>
                <td>28</td>
            </tr>
            <tr>
                <td class="borderStyleCarRecord">10003</td>
                <td>Anthony</td>
                <td>M</td>
                <td>24</td>
            </tr>
        </table>
    </center> -->
</body>

</html>