<html>

<head>
    <title>Contractor List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="\app\css\styles.css" />
</head>

<body style="margin: 0; padding: 0;">
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
    <center style="margin-top: 2em;">
        <div class="title">
            <h2 class="title-text">Contractors</h2>
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

    <!-- <center>
        <div style="flex-wrap: wrap;">
            <div style="flex: 1; display: inline-block;">
                <table style="width: fit-content;">
                    <tr>
                        <th class="contractor"><a href='/ContractorCarRecord/index/2' class="contractor">Honda</a></th>
                    </tr>
                    <tr>
                        <td class="contractor"><a href='/Contractor/areYouSureDelete/' class="contractor">Delete</a></td>
                    </tr>
                </table>
            </div>
            <div style="flex: 1; display: inline-block;">
                <table style="width: fit-content;">
                    <tr>
                        <th class="contractor"><a href='/ContractorCarRecord/index/2' class="contractor">Honda</a></th>
                    </tr>
                    <tr>
                        <td class="contractor"><a href='/Contractor/areYouSureDelete/' class="contractor">Delete</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </center> -->

    <!-- PUT PADDING ON TD, TH, A -->

    <!-- display table cell -->


    <center>
        <div style="flex-wrap: wrap;">
            <?php
            if ($data['contractors'] != null) {
                foreach ($data['contractors'] as $contractor) {
                    echo "<div style=\"flex: 1; display: inline-block;\">";
                    echo "<table style=\"width: fit-content; margin: 0\">
                    <tr>
                        <th class=\"contractor\"><a href='/ContractorCarRecord/index/{$contractor->contractor_id}' class=\"contractor\">{$contractor->company_name}</a></th>
                    </tr>
                    <tr>
                        <td class=\"contractor\"><a href='/Contractor/areYouSureDelete/{$contractor->contractor_id}/{$contractor->company_name}' class=\"contractor\">Delete</a></td>
                    </tr>
                </table></div>";
                    // echo "<a href='/ContractorCarRecord/index/{$contractor->contractor_id}'>{$contractor->company_name}</a><br>";
                    // echo "<a href='/Contractor/areYouSureDelete/{$contractor->contractor_id}/{$contractor->company_name}'>Delete</a><br><br>";
                }
            }
            ?>
            <!-- <a href=" /ContractorCarRecord/index/">Logout</a><br> -->
        </div>
    </center>
</body>

</html>