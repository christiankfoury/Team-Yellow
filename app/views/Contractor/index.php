<html>

<head>
    <title>Contractor List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="\app\css\styles.css" />
</head>

<body>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #e61610; font-size: 3em; border-style: solid; border-width: 0px 2px 0px 2px; border-color: black;" href="/User/index">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #e61610; font-size: 3em; border-style: solid; border-width: 0px 2px 0px 2px; border-color: black;" href="/Contractor/index">Contractors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #e61610; font-size: 3em; border-style: solid; border-width: 0px 2px 0px 2px; border-color: black;" href="/User/detailingCustomer">Detailing Customers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #e61610; font-size: 3em; border-style: solid; border-width: 0px 2px 0px 2px; border-color: black;" href="/User/accountManagement">Account Management</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background-color: #e61610; font-size: 3em; border-style: solid; border-width: 0px 2px 0px 2px; border-color: black;" href="/User/logout">Logout</a>
        </li>
    </ul>
    <center style="margin-top: 2em;">
        <div class="title">
            <h2>Contractors</h2>
        </div>
    </center>
    <a href="/Contractor/addContractor" class="grey-button">New Contractor? Click to add a contractor</a><br><br>

    <!-- <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1;  border: 1px solid black; margin: 2em; text-align: center; padding: 15em 0em;">
                <a href='/ContractorCarRecord/index/2' style="font-size: 3vw">Honda</a>
            </div>
            <div style="flex: 1;  border: 1px solid black; margin: 2em; text-align: center; padding: 15em 0em;">
                <a href='/ContractorCarRecord/index/2' style="font-size: 3vw">Honda</a>
            </div>
        </div> -->

    <!-- <a href='/ContractorCarRecord/index/2' style="font-size: 3vw; border-style: solid; padding: 10px; margin-left: 200px;">Honda</a>
        <a href='/ContractorCarRecord/index/2' style="font-size: 3vw">Honda</a>
        <a href='/ContractorCarRecord/index/2' style="font-size: 3vw">Honda</a> -->

    <table style="width: fit-content; display: table-cell;">
        <tr>
            <th style="font-size: 100px;"><a href='/ContractorCarRecord/index/2' style="border: 1px solid black;">Honda</a></th>
        </tr>
        <tr>
            <td style="font-size: 40px; text-align: right"><a href='/Contractor/areYouSureDelete/' style="border: 1px solid black;">Delete</a></td>
        </tr>
    </table>
    <table style="width: fit-content; display: table-cell;">
        <tr>
            <th style="font-size: 100px;"><a href='/ContractorCarRecord/index/2' style="border: 1px solid black;">Honda</a></th>
        </tr>
        <tr>
            <td style="font-size: 40px; text-align: right"><a href='/Contractor/areYouSureDelete/' style="border: 1px solid black;">Delete</a></td>
        </tr>
    </table>
    <!-- PUT PADDING ON TD, TH, A -->

    <!-- display table cell -->



    <?php
    // if ($data['contractors'] != null) {
    //     foreach ($data['contractors'] as $contractor) {
    //         echo "<a href='/ContractorCarRecord/index/{$contractor->contractor_id}'>{$contractor->company_name}</a><br>";
    //         echo "<a href='/Contractor/areYouSureDelete/{$contractor->contractor_id}/{$contractor->company_name}'>Delete</a><br><br>";
    //     }
    // }
    ?>
    <!-- <a href=" /ContractorCarRecord/index/">Logout</a><br> -->
</body>

</html>