<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!--JQuery and Ajax -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Monthly Payment Lease Calculator PHP AND AJAX Version</title>
    <style>
        h6{
            font-size: 14px;
        }
    </style>


    <script type="text/javascript">

        jQuery(document).ready(function() {
            jQuery("input").on("change", function() {
                showMonthlyPayment();
            });
        });

        function showMonthlyPayment(str) {

            var url = '../getamount.php';
            var AB = document.getElementById('val1').value; //Aanbetaling = AB
            var LT = document.getElementById('val2').value; //Looptijd = LT
            var AS = document.getElementById('val3').value; //Aanschaf = A;
            var ST = document.getElementById('val4').value; //Slottermijn

            if(AB,LT,AS,ST) {


                var urlLink = "AB=" + AB + "&LT=" + LT + "&AS=" + AS + "&ST=" + ST;

                if (str == "") {
                    document.getElementById("showMonthlyPayment_text").innerHTML = "";
                    return;
                } else {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();


                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            var return_data = xmlhttp.responseText;
                            document.getElementById("showMonthlyPayment_text").innerHTML = return_data;
                        }
                    };
                    xmlhttp.open("POST", url, true);
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xmlhttp.send(urlLink);
                    document.getElementById("showMonthlyPayment_text").innerHTML = "processing...";
                }
            }
        }

    </script>
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


                    <form action="#" method="get">

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
                            <br><br>


                            <input type="submit" name="submit" value="Submit Data" onClick="javascript:showMonthlyPayment();">
                            <br> <br>
                            <div><h6>Your monthly payment amount:</h6></div>
                            <p id="showMonthlyPayment_text"></p>
                    </form>

                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

