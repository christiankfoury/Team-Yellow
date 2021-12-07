<html>

<head>
    <title>Records for <?php echo $data['contractor']->company_name ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

    <a href="/ContractorCarRecord/index/<?php echo $data['contractor']->contractor_id ?>" class="grey-button">Go back</a><br><br>

    <center>
        <table class="contractorCarRecord">
            <tr>
                <th>Courtesy Number</th>
                <th>Car Specification</th>
                <th>Type of Job</th>
                <th>Date</th>
                <th class="delete-row">Action</th>
                <th class="delete-row">Action</th>
        </table>
        </tr>
        <?php
        if ($data['resultsRecords'] != null) {
            echo "<table class=\"carRecordData\">";
            foreach ($data['resultsRecords'] as $record) {
                echo "<tr>";
                echo "<td class='borderStyleCarRecord'>" . $record->courtesy_number . "</td>";
                echo "<td>" . $record->car_specification . "</td>";
                echo "<td>" . $record->job_type . "</td>";
                echo "<td>" . $record->date . "</td>";
                echo "<td class='delete-row'><a class='edit-button' href='/ContractorCarRecord/editRecord/" . $record->contractor_car_record_id . "'>Edit</a></td>";
                echo "<td class='delete-row'><a class='edit-button delete-button' href='/ContractorCarRecord/deleteRecord/{$data['contractor']->contractor_id}/" . $record->contractor_car_record_id . "'>Delete</a></td>";
                // echo "<a href='/ContractorCarRecord/index/{$contractor->contractor_id}'>{$contractor->company_name}</a><br>";
                // echo "<a href='/Contractor/areYouSureDelete/{$contractor->contractor_id}/{$contractor->company_name}'>Delete</a><br><br>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
        </table>
    </center>
</body>

</html>