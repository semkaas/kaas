<!DOCTYPE html>
<html lang="nl" data-mode="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="webpagina van restaurant Vlam en Vlees Zoetermeer">
    <meta name="keywords" content="HTML, reseveren, locatie, Zoetermeer, Vlam, Vlees, VlamenVlees, restaurant, dinner,">
    <meta name="author" content="Sem en Sidney">
    <title>Vlam en Vlees Zoetermeer Restaurant toegankelijk voor gehandicapte mensen</title>
    <link rel="icon" href="img/logo_vlam_en_vlees.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js" defer></script>
</head>
<script>
    document.getElementById('menu_info').addEventListener('click', openOrCloseCategory)
function openOrCloseCategory(event) {
if (event.target.classList.contains("menu_heading")) {
     if (event.target.nextElementSibling.style.display == "grid") {
            event.target.nextElementSibling.style.display = "none";
        } else {
             event.target.nextElementSibling.style.display = "grid";
        }
    }
}
</script>
<body>
<?php include 'includes/header.php'; ?>
<main>

<section class="titel">
    <h3>menukaart<h3>
</section>

<section class="cashback">
    <h3>100% geld terug<h3>
</section>
<section id="menu_info">
    <article class="menuCategory">
        <h2  style="background-color: grey" class="menu_heading" onclick="openOrCloseCategory(event)" position: absolute;>Dranken</h2>
        <article class="menu_items" style="display: none;">
            <h1>Frisdranken €2,75</h1>
            <p>Cola</p>
            <p>Fanta</p>
            <p>Sprite</p>
            <p>Ice Tea</p>
            <h1>Bieren</h1>
            <p>Tap Pils €3,00 </p>
            <p>Speciale bier vanaf €4,50</p>
            <h1>Wijnen</h1>
            <p>Huiswijnen Wit/Rood/Rosé - per glas €4,50</p>
            <p>Fles huiswijn €22,50</p>

        </article>
    </article>

    <article class="menuCategory">
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)" style="background-color: grey" position: absolute;>Voorgerechten (17:00-22:00)</h2>
        <article class="menu_items" style="display: none;">
            <h1>BBQ Nacho's €9,50</h1> 
            <p>
                Tortillachips met pulled pork, cheddar,<br> jalapeños, BBQ-saus en zure room</p>
            <h1>Smoked Wings €8,50</h1> 
            <p>
                Gerookte kippenvleugels met keuze uit:<br> BBQ, Buffalo of Honey-Sriracha saus</p>
            <h1>Uienringen €6,50</h1> 
            <p>
                Krokante uienringen met ranch dressing</p>
        </article>

    </article>

    <article class="menuCategory"   >
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)" style="background-color: grey" position: absolute;>Hoofdgerechten (17:00-22:00)</h2>
        <article class="menu_items" style="display: none;">
            <h1>Beef Brisket €24,50</h1> 
        <p>
            14 uur lang gerookt rundvlees, gekruid <br>met ons eigen rub</p>
        <h1>Pulled Pork €19,50</h1> 
        <p>
            Langzaam gegaard varkensvlees <p>met BBQ-saus</p>
        <h1> baby back ribs </h1>
        <p>Halve rack €19,50</p>
        <p>Hele rack €28,50</p>
        <p>Malse varkensribbetjes met BBQ-glazuur</p>
        <h1>Smoked Chicken €18,50</h1>
        <p>Halve kip, langzaam gerookt met kruiden</p>
        <h1>The Pitmaster €32,50</h1>
        <p>Combinatie van brisket, pulled pork en ribs</p>
        <h1>Family Feast <br>2-3 pers. €59,50</h1>
        <p>Selectie van al onze BBQ-specialiteiten</p>
        <h1>sides</h1>
        <h3>Mac 'n Cheese €4,50<h3>
        <h3>Geroosterde Groenten €4,00<h3>
        <h3>Zoete Aardappel Friet €4,50<h3>
        <h3>Aardappel Wedges €4,00<h3>
        <h3>Extra Coleslaw €3,50<h3>
        <h1>sauzen</h1>
        <h3>Classic BBQ</h3>
        <h3>Honey Mustard</h3>
        <h3>Spicy Chipotle</h3>
        <h3>Alabama White Sauce</h3>
        <h3>Alle sauzen €1,50</h3>
        </article>
    </article>

    <article class="menuCategory" >
        <h2 class="menu_heading" onclick="openOrCloseCategory(event)" style="background-color: grey" position: absolute;>Nagerechten (17:00-22:00)</h2>
        <article class="menu_items" style="display: none;">
            <h1>Apple Cobbler €7,50</h1>
            <p>Warme appelkruimel met vanille ijs</p>
            <h1>Chocolate Brownie €6,50</h1>
            <p>Met pecannoten en karamelsaus</p>
            <h1>Banana Foster €7,50</h1>
            <p>Gekarameliseerde banaan met rum en vanille ijs</p>
        </article>
    </article>
</section>      
        
        
        
        
        
        
        
        
        <style>
            .voet{
                margin-top: 50vh;
            }
        </style>
<main>

 
<?php include 'includes/footer.php'; ?>
</body>
</html>