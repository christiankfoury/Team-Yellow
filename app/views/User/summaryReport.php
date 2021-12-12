<html>

<head>
    <title>Summary Report</title>
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
    <div style="margin-top: 2em; margin-left: 2em;">
        <div class="title" style="margin-bottom: 50px;">
            <h2>Summary Report</h2>
        </div>
    </div>
    <a href="/User/index" class="grey-button">Go back</a><br><br>
    <button style="border: none; margin-top: 10px;" class="right-print-button add-car-record" onclick="printPage('/User/summaryReportPrint')">Print</button><br><br>

    <center>
        <div class="title">
            <h1>Users</h1>
        </div>
        <table class="contractorCarRecord">
            <tr>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Password Hash</th>
                <th>Two factor token</th>
                <th>Type</th>
            </tr>
        </table>
        <!-- <div id="table1"> -->
        <?php
        if ($data['users'] != null) {
            echo "<table class=\"carRecordData\" style='margin-bottom: 50px;'>";
            foreach ($data['users'] as $record) {
                echo "<tr>";
                echo "<td class='borderStyleCarRecord'>" . $record->username . "</td>";
                echo "<td>" . $record->first_name . "</td>";
                echo "<td>" . $record->last_name . "</td>";
                echo "<td>" . $record->password_hash . "</td>";
                if ($record->two_factor_token == null) {
                    echo "<td>N/A</td>";
                } else {
                    echo "<td>" . $record->two_factor_token . "</td>";
                }
                echo "<td>" . $record->type . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
        <!-- </div> -->
    </center>


    <center>
        <div class="title">
            <h1>Contractors</h1>
        </div>
        <table class="contractorCarRecord">
            <tr>
                <th>Contractor ID</th>
                <th>Company Name</th>
            </tr>
        </table>
        <!-- <div id="table1"> -->
        <?php
        if ($data['contractors'] != null) {
            echo "<table class=\"carRecordData\" style='margin-bottom: 50px;'>";
            foreach ($data['contractors'] as $record) {
                echo "<tr>";
                echo "<td class='borderStyleCarRecord'>" . $record->contractor_id . "</td>";
                echo "<td>" . $record->company_name . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
        <!-- </div> -->
    </center>


    <center>
        <div class="title">
            <h1>Contractor Car Records</h1>
        </div>
        <table class="contractorCarRecord">
            <tr>
                <th>Contractor Car Record ID</th>
                <th>Courtesy Number</th>
                <th>Car Specification</th>
                <th>Type of Job</th>
                <th>Date</th>
                <th>Contractor</th>
                <th>Added by</th>
            </tr>
        </table>
        <!-- <div id="table1"> -->
        <?php
        if ($data['contractorCarRecords'] != null) {
            echo "<table class=\"carRecordData\">";
            foreach ($data['contractorCarRecords'] as $record) {
                $contractor = new \app\models\Contractor();
                $contractor = $contractor->getContractorById($record->contractor_id);
                echo "<tr>";
                echo "<td class='borderStyleCarRecord'>" . $record->contractor_car_record_id . "</td>";
                echo "<td>" . $record->courtesy_number . "</td>";
                echo "<td>" . $record->car_specification . "</td>";
                echo "<td>" . $record->job_type . "</td>";
                echo "<td>" . $record->date . "</td>";
                echo "<td>" . $contractor->company_name . "</td>";
                echo "<td>" . $record->username . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </center>

    <script>
        function closePrint() {
            document.body.removeChild(this.container);
        }

        function setPrint() {
            this.contentWindow.container = this;
            this.contentWindow.onbeforeunload = closePrint;
            this.contentWindow.onafterprint = closePrint;
            this.contentWindow.focus(); // Required for IE 
            this.contentWindow.print();
        }

        function printPage(sURL) {
            var oHideFrame = document.createElement("iframe");
            oHideFrame.onload = setPrint;
            oHideFrame.style.position = "fixed";
            oHideFrame.style.right = "0";
            oHideFrame.style.bottom = "0";
            oHideFrame.style.width = "0";
            oHideFrame.style.height = "0";
            oHideFrame.style.border = "0";
            oHideFrame.src = sURL;
            document.body.appendChild(oHideFrame);
        }
    </script>
</body>

</html>