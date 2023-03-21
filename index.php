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
    <header>
        <h1>John Doe</h1>
        <h2>Consultant in economics</h2>
    </header>
    <main>
        <?php foreach ($data as $title => $cards) { ?>
            <section>
                <h1><?php echo $title; ?></h1>
                <div class="trainingCards">
                    <?php foreach ($cards as $key => $card) { ?>
                        <?php include 'article.php'; ?>
                    <?php } ?>
                </div>
            </section>
        <?php } ?>
    </main>
</body>
</html>