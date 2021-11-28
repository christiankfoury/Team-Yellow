<html>

<head>
    <title>Edit Record</title>
</head>

<body>
    <h1>Edit Record</h1>
    <form action='' method='post'>
        <label>Courtesy Number:</label>
        <input type='text' name='courtesy_number' placeholder="Courtesy Number" value="<?php echo $data['contractorCarRecord']->courtesy_number ?>"><br>
        <label>Car Specification:</label>
        <input type='text' name='car_specification' placeholder="Car Specification" value="<?php echo $data['contractorCarRecord']->car_specification ?>"><br>
        <label>Type of Job:</label>
        <input type='text' name='job_type' placeholder="Type of Job" value="<?php echo $data['contractorCarRecord']->job_type ?>"><br>
        <label>Date:</label>
        <input type='text' name='date' placeholder='Select a date' placeholder="Select a date" onfocus="(this.type='date')" value="<?php echo $data['contractorCarRecord']->date ?>"><br>
        <input type='submit' name='action' value='Add new record' />
    </form>

</body>

</html>