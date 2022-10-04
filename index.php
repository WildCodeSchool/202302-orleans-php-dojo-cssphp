<?php
require 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Dojo</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include 'header.php' ?>
    <main>
        <?php foreach ($data as $category => $items) { ?>
            <section>
                <h1><?php echo $category ?></h1>
                <div class="cards">
                    <?php foreach ($items as $item) { ?>
                        <?php require 'figure.php'; ?>
                    <?php } ?>
                </div>
            </section>

        <?php } ?>
    </main>
</body>
</html>