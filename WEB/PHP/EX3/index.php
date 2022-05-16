<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cyborg">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">

    <title>Title</title>
</head>
<body class = "main">
    <?php
    if(isset($_SESSION["notes"])) {
    foreach($_SESSION["notes"] as $index=>$note) {
        ?>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <?= $note ?>
    </div>
    </div>
        <?php }}?>

    <div>
        <form action="addNote.html">
            <button type = "submit" class = "btn btn-warning">
                Add Note
            </button>
        </form>
    </div>
</body>
</html>