<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js" defer></script>
    
</head>
<body>
<?php include 'includes/header.php'; ?>

<section class="titel">
    <h1>menukaart<h1>
</section>
<article class = "hamburger">
            <h1></h1>
        </article>
<section class="cashback">
    <h1>100% geld terug<h1>
</section>
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
            <h1>BBQ Nacho's 9,50</h1> 
            <p>
                Tortillachips met pulled pork, cheddar, jalapeños, BBQ-saus en zure room</p>
            <h1>Smoked Wings 8,50</h1> 
            <p>
                Gerookte kippenvleugels met keuze uit: BBQ, Buffalo of Honey-Sriracha saus</p>
            <h1>Uienringen 6,50</h1> 
            <p>
                Krokante uienringen met ranch dressing</p>
        </article>

    </article>

    <article class="menuCategory">
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)">Hoofdgerechten (17:00-22:00)</h2>
        <article class="menu_items" style="display: none;">
            <h1>Beef Brisket 24,50</h1> 
        <p>
            14 uur lang gerookt rundvlees, gekruid met ons eigen rub</p>
        <h1>Pulled Pork 19,50</h1> 
        <p>
            Langzaam gegaard varkensvlees met BBQ-saus</p>
        <h1> baby back ribs </h1>
        <p>Halve rack 19,50</p>
        <p>Hele rack 28,50</p>
        <p>Malse varkensribbetjes met BBQ-glazuur</p>
        <h1>Smoked Chicken 18,50</h1>
        <p>Halve kip, langzaam gerookt met kruiden</p>
        <h1>The Pitmaster 32,50</h1>
        <p>Combinatie van brisket, pulled pork en ribs</p>
        <h1>Family Feast 2-3 pers. 59,50</h1>
        <p>Selectie van al onze BBQ-specialiteiten</p>
        <h1>sides</h1>
        <h3>Mac 'n Cheese 4,50<h3>
        <h3>Geroosterde Groenten 4,00<h3>
        <h3>Zoete Aardappel Friet 4,50<h3>
        <h3>Aardappel Wedges 4,00<h3>
        <h3>Extra Coleslaw 3,50<h3>
        <h1>sauzen</h1>
        <h3>Classic BBQ</h3>
        <h3>Honey Mustard</h3>
        <h3>Spicy Chipotle</h3>
        <h3>Alabama White Sauce</h3>
        <h3>Alle sauzen 1,50</h3>
        </article>
    </article>

    <article class="menuCategory">
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)">Nagerechten (17:00-22:00)</h2>
        <article class="menu_items" style="display: none;">
            <p>Koffie - 2 euro</p>
            <p>Thee - 2 euro</p>
        </article>
    </article>
        
        
        
        
        
        
        
        
        
        
        <style>
            .voet{
                margin-top: 50vh;
            }
        </style>
   

 
<?php include 'includes/footer.php'; ?>
</body>
</html>