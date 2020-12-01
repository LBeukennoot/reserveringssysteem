<?php
require_once 'includes\db.php';
/** @var array $producten */
?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<section class="header-image">
    <div>
        <div>
            <h1>Thee Met...</h1>
        </div>
    </div>
</section>
<section>
    <div>
        <div class="producten">
            <?php foreach ($producten as $index => $product) { ?>
            <product>
                <div class="cover">
                    <a href="details.php?index=<?= $index ?>">
                        <img src="images\<?=$product['afbeelding']?>" alt=""/>
                    </a>
                </div>
                <div class="links">
                    <a>Op te halen: <?=$product['datum']?></a>
                    <a class="bestellen" href="bestellen.php?index=<?= $index ?>">Bestellen</a>
                </div>
            </product>
            <?php } ?>
        </div>
    </div>
</section>
</body>
</html>