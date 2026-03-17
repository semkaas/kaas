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
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)">Lunch</h2>
        <article class="menu_items" style="display: none;">
            <p>Gezond - 5 euro</p>
            <p>Kip - 6 euro</p>
        </article>
    </article>

    <article class="menuCategory">
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)">Voorgerechten</h2>
        <article class="menu_items" style="display: none;">
            <p>Gezond - 5 euro</p>
            <p>Kip - 6 euro</p>
        </article>
    </article>

    <article class="menuCategory">
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)">Hoofdgerechten</h2>
        <article class="menu_items" style="display: none;">
            <p>Koffie - 2 euro</p>
            <p>Thee - 2 euro</p>
        </article>
    </article>

    <article class="menuCategory">
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)">Nagerechten</h2>
        <article class="menu_items" style="display: none;">
            <p>Koffie - 2 euro</p>
            <p>Thee - 2 euro</p>
        </article>
    </article>

   

 
<?php include 'includes/footer.php'; ?>
</body>
</html>