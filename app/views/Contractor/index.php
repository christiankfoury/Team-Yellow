<html>

<head>
    <title>Contractor List</title>
</head>

<body>
    <h1>Contractors</h1>
    <a href="/User/index">Home</a><br>
    <a href="/Contractor/index">Contractors</a><br>
    <a href="/User/detailingCustomer">Detailing Customers</a><br>
    <a href="/User/accountManagement">Account Management</a><br>
    <a href="/User/logout">Logout</a><br><br><br>

    <a href="/Contractor/addContractor">New Contractor? Click to add a contractor</a><br><br>

    <?php
    if ($data['contractors'] != null) {
        foreach ($data['contractors'] as $contractor) {
            echo "<a href='/ContractorCarRecord/index/{$contractor->contractor_id}'>{$contractor->company_name}</a><br>";
            echo "<a href='/Contractor/areYouSureDelete/{$contractor->contractor_id}/{$contractor->company_name}'>Delete</a><br><br>";
        }
    }
    ?>
    <!-- <a href="/ContractorCarRecord/index/">Logout</a><br> -->
</body>

</html>