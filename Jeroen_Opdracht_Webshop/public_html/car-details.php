<?php


/**
 * Created by PhpStorm.
 * User: Jhudeska
 * Date: 2019-05-01
 * Time: 17:27
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/backup/car-details.css">
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">-->
    <title> Jeroen_Opdracht_Webshop</title>
</head>
<body>

<h1 class="h1-center">Opdracht voor Jhudeska</h1>
<p class="p-description">Het is de bedoeling dat dit volledig weet te realiseren  met HTML 5 /CSS 3 als je eerste opdracht</p>

<div class="container">
    <div class="model-preview-block">
        <div class="model-preview-index-large-first">
            <div class="title">FABIA HATCHBACK</div>
            <div class="type">Active</div>
        </div>
        <div class="demo-2-first"><img src="../img/Skoda_Fabia.jpg" alt=""></div>
        <div class="text-first">
            <div class="description-1">Standaard op de Active:</div>
            <div class="description"> Laadruimte tot 1.150 liter</div>
            <div class="description"> LED-daverlichting</div>
            <div class="description"> 6 Airbags</div>
            <div class="price-1"> Stoere basis</div>
            <div class="price">Vanaf €15.830</div>
            <button class="btn btn-green">Bestel deze variant</button>
        </div>

    </div>

    <div class="model-preview-block">
        <div class="model-preview-index-large-middle">
            <div class="title">FABIA HATCHBACK</div>
            <div class="type">Business Edition</div>
        </div>
        <div class="demo-2-middle"><img src="../img/Skoda_Fabia.jpg" alt=""></div>
        <div class="text-middle">
            <div class="description-1">Extra bovenop de Active:</div>
            <div class="description"> Climate Control</div>
            <div class="description"> DAP (Digitale radio)</div>
            <div class="description"> Parkeersensoren achter</div>
            <div class="price-1"> Actiemodel</div>
            <div class="price">Vanaf €18.330</div>
            <button class="btn btn-green">Vraag aan!</button>
        </div>

    </div>


    <div class="model-preview-block">
        <div class="model-preview-index-large-last">
            <div class="title">FABIA HATCHBACK</div>
            <div class="type">Monte Carlo</div>
        </div>
        <div class="demo-2-last"><img src="../img/Skoda_Fabia.jpg" alt=""></div>
        <div class="text-last">
            <div class="description-1"> Extra bovenop de Active:</div>
            <div class="description"> Bluethooth telefoonverbinding</div>
            <div class="description"> Amundsen navigatie</div>
            <div class="description"> Parkeersensoren achter</div>
            <div class="price-1"> Business deal</div>
            <div class="price">Vanaf €20.290</div>
            <button class="btn btn-green">Versturen</button>
        </div>

    </div>

</div>

<div class="gray-background">
    <h1 id="gray" class="h1-gray">Ik ontvang graag een offerte Skoda Fabia Hatchback </h1>
    <h1 class="h1-gray">Business Edition </h1>

    <div class="container-2">

        <div class="container-leaseamount">
            <h1 id="gray" class="h2-gray"> €1445 </h1>
            <p id="gray" class="h2-gray">Is dit uw lease bedrag per maand? </p>
            <p>Wij willen u graag een verblijvende </p>
            <p>offerte aanbieden. </p>
        </div>




    <form action="" method="get" class="calculator-form">

        <label>Aanschaf (ex. BTW):</label><br>
        <input type="text" name="val3" id="val3">
        <br>

        <label>Aanbetaling:</label><br>
        <input type="text" name="val1" id="val1">
        <br>

        <label>Slottermijn:<br>
            <input type="text" name="val4" id="val4">
            <br>

            <label>Looptijd (mnd):</label><br>
        <input type="text" name="val2" id="val2">
        <br><br>







        <h1 id="gray" class="h2-gray-arrow">  VUL JE GEGEVENS IN </h1>
        <label class="radio">Aanhef<sup>*</sup>
            <input type="radio" checked="checked" name="radio"> Dhr.
            <input type="radio" name="radio"> Mevr.
            <span class="checkmark"></span>
        </label>
        <br><br>
        <label for="fname">Voorletters</label><sup>*</sup>
        <input class="style-round" type="text" id="fname" name="firstname" placeholder="Voorletters">
        <br><br>
        <label for="fname">Achternaam</label><sup>*</sup>
        <input class="style-round" type="text" id="fname" name="firstname" placeholder="Achternaam">
        <br><br>
        <label for="fname">Telefoonnummer</label><sup>*</sup>
        <input class="style-round" type="text" id="fname" name="firstname" placeholder="Telefoonnummer">
        <br><br>
        <label for="fname">Emailadres</label><sup>*</sup>
        <input class="style-round" type="text" id="fname" name="firstname" placeholder="Emailadres">
        <br><br>

        <label class="radio">Auto inruilen
            <input type="radio" checked="checked" name="radio"> Ja
            <input type="radio" name="radio"> Nee
            <span class="checkmark"></span>
        </label>
        <br><br>
        <button class="btn btn-green">Versturen</button>

    </form>
    </div>

</div>


</body>
</html>