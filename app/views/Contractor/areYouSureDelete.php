<html>

<head>
    <title>Delete Contractor</title>
</head>

<body>
    <h1>Delete Contractor</h1>
    <h2>Are you sure you want to delete <?php $data['contractor']->company_name; ?> as a contractor and delete its records?</h2>
    <h3>Note that clicking yes is a irrversible action</h3>
    <form action='' method='post'>
        <input type='submit' name='yes' value="Yes" /><br>
        <input type='submit' name='no' value='No' />
    </form>

</body>

</html>