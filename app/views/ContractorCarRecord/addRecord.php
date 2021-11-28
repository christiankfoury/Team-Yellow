<html>

<head>
    <title>New Record for <?php echo $data['contractor']->company_name ?></title>
</head>

<body>
    <h1>New Record for <?php echo $data['contractor']->company_name ?></h1>
    <form action='' method='post'>
        <label>Courtesy Number:</label>
        <input type='text' name='courtesy_number' placeholder="Courtesy Number"><br>
        <label>Car Specification:</label>
        <input type='text' name='car_specification' placeholder="Car Specification"><br>
        <label>Type of Job:</label>
        <input type='text' name='job_type' placeholder="Type of Job"><br>
        <label>Date:</label>
        <input type='text' name='date' placeholder='Select a date' placeholder="Select a date" onfocus="(this.type='date')"><br>
        <input type='submit' name='action' value='Add new record' />
    </form>

</body>

</html>