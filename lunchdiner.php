<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js"></script>
    
</head>
<body>
<?php include 'includes/header.php'; ?>

<h1> menukaart</h1>
<section id="menu_info">
    <article class="menuCategory">
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)">Lunch (11:00-13:00)</h2>
        <article class="menu_items" style="display: none;">
            <p>Broodje met ei en geitenkaas - 9 euro</p>
            <p>Broodje met draadjesvlees en mayonaise - 13 euro</p>
            <p>ei en rundvlees salade - 11,50 euro</p>
        </article>
    </article>

    <article class="menuCategory">
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)">Voorgerechten (17:00-22:00)</h2>
        <article class="menu_items" style="display: none;">
            <p>Gezond - 5 euro</p>
            <p>Kip - 6 euro</p>
        </article>
    </article>

    <article class="menuCategory">
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)">Hoofdgerechten (17:00-22:00)</h2>
        <article class="menu_items" style="display: none;">
            <p>Koffie - 2 euro</p>
            <p>Thee - 2 euro</p>
        </article>
    </article>

    <article class="menuCategory">
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)">Nagerechten (17:00-22:00)</h2>
        <article class="menu_items" style="display: none;">
            <p>Koffie - 2 euro</p>
            <p>Thee - 2 euro</p>
        </article>
    </article>

   

 
<?php include 'includes/footer.php'; ?>
</body>
</html>