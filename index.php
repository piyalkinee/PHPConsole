<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="piyalkinee@gamil.com">
    <meta name="description" content="PHP Console helps you learn and do small experiments with your code">
    <title>PHP Consol</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <p class="label">PHP Console</p>
    <div class="console-body">
        <?php include 'data/output.php' ?>
    </div>
    <form action="data/input.php" method="GET"><input type="text" placeholder="input text" name="usercommand"></form>
    <p class="help-text">Use the <span class="help-text-command">.help</span> command for more information</p>
</body>
</html>