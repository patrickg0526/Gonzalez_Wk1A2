<html>

<head>
    <title>Welcome to PHP!</title>
</head>

<body>
    <?php echo '<h1 style="text-align: center;">Welcome to PHP!</h1>'?>
    <?php date_default_timezone_set('America/New_York'); ?>
    <?php echo '<h2 style="text-align: center;">My Name is Patrick Gonzalez</h2>' ?>
    <?php echo '<p style="text-align: center;">The Date is ' . date('m/d/Y') . '</p>' ?>
    <?php echo '<p style="text-align: center;">The Time is ' . date('h:i:s A') . '</p>' ?>
    <?php echo '<p style="text-align: center;">This line was added in VS Code.</p>' ?>
</body>

</html>