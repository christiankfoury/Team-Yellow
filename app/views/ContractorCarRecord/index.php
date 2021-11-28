<html>

<head>
    <title>Records for <?php echo $data['contractor']->company_name ?></title>
</head>

<body>
    <h1>Records for <?php echo $data['contractor']->company_name ?></h1>
    <a href="/User/index">Home</a><br>
    <a href="/Contractor/index">Contractors</a><br>
    <a href="/User/detailingCustomer">Detailing Customers</a><br>
    <a href="/User/accountManagement">Account Management</a><br>
    <a href="/User/logout">Logout</a><br><br><br>

    <?php
    if (isset($data['error'])) {
        echo "<h3>{$data['error']}</h3>";
    }
    ?>

    <form action='' method='post'>
        Search by courtesy number: <input type='text' name='courtesy_number' placeholder="Courtesy Number" />
        <input type='submit' name='action' value='Search' />
    </form>

    <form action='' method='post'>
        Filter from
        <input type='text' name='starting_date' placeholder="Select a date" onfocus="(this.type='date')" />
        to
        <input type='text' name='ending_date' placeholder="Select a date" onfocus="(this.type='date')" />
        <input type='submit' name='action2' value='Filter' />
    </form>

    <a href="/ContractorCarRecord/addRecord/<?php echo $data['contractor']->contractor_id ?>}">Add new record for <?php echo $data['contractor']->company_name; ?></a><br><br>

    <table>
        <tr>
            <th>Courtesy Number</th>
            <th>Car Specification</th>
            <th>Type of Job</th>
            <th>Date</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        <?php
        if ($data['records'] != null) {
            foreach ($data['records'] as $record) {
                echo "<tr>";
                echo "<td>" . $record->courtesy_number . "</td>";
                echo "<td>" . $record->car_specification . "</td>";
                echo "<td>" . $record->job_type . "</td>";
                echo "<td>" . $record->date . "</td>";
                echo "<td><a href='/ContractorCarRecord/editRecord/" . $record->contractor_car_record_id . "'>Edit</a></td>";
                echo "<td><a href='/ContractorCarRecord/deleteRecord/{$data['contractor']->contractor_id}/" . $record->contractor_car_record_id . "'>Delete</a></td>";
                // echo "<a href='/ContractorCarRecord/index/{$contractor->contractor_id}'>{$contractor->company_name}</a><br>";
                // echo "<a href='/Contractor/areYouSureDelete/{$contractor->contractor_id}/{$contractor->company_name}'>Delete</a><br><br>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>