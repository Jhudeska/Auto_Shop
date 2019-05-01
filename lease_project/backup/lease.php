<?php
/**
 * Created by PhpStorm.
 * User: jhudeska
 * Date: 06/02/2019
 * Time: 19:33
 */

//Monthly payment calculator
function PMT($rate = 0,  $months = 0, $creditAmount = 0, $residual = 0)
{
    if(!is_null($rate) && $rate != 0) {
        return (-$residual - $creditAmount * pow(1 + $rate, $months)) / (1 + $rate * 0) / ((pow(1 + $rate, $months) - 1) / $rate);
    } else {
        return (-$creditAmount - $residual) / $months;
    }
}
//$monthlyPayment = ceil(PMT((6.99/1200),48, -15000, 2500));

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Monthly Payment Lease Calculator</title>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <h1>Calculator<small> Monthly Payment Lease Calculator</small></h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="col-md-6">

                <div class="form-group row">


                    <form action="" method="get">

                        <label>Aanbetaling:</label><br>
                        <input type="text" name="val1" id="val1">
                        <br>

                        <label>Looptijd:</label><br>
                        <input type="text" name="val2" id="val2">
                        <br><br>

                        <label>Aanschaf (ex. BTW):</label><br>
                        <input type="text" name="val3" id="val3">
                        <br>

                        <label>Slottermijn:<br>
                        <input type="text" name="val4" id="val4">
                        <br>


                        <input type="submit" name="submit" value="send">
                    </form>

                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    if( isset($_GET['submit']) ){

        $val1 = htmlentities($_GET['val1']);
        $val2 = htmlentities($_GET['val2']);
        $val3 = htmlentities($_GET['val3']);
        $val4 = htmlentities($_GET['val4']);
        //$monthlyPayment = ceil(PMT((6.99/1200),48, -15000, 2500));
        //$monthlyPayment = ceil(PMT((6.99/1200),$val2, -$val3, $val4)); versie jeroen
        $creditAmount = $val3 - $val1;
        $monthlyPayment = ceil(PMT(6.99/1200,$val2, -$creditAmount, $val4));
    }
    echo "<h2>Your monthly payment amount:</h2>";
    echo $monthlyPayment;
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>




