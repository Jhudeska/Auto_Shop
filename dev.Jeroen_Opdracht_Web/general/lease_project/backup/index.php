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
                        <input type="text" name="aanbetaling" id="val1" onchange="showMonthlyPayment(this.value)">
                        <br>

                        <label>Looptijd:</label><br>
                        <input type="text" name="looptijd" id="val2" onchange="showMonthlyPayment(this.value)">
                        <br><br>

                        <label>Aanschaf (ex. BTW):</label><br>
                        <input type="text" name="aanschaf" id="val3" onchange="showMonthlyPayment(this.value)">
                        <br>

                        <label>Slottermijn:<br>
                            <input type="text" name="slottermijn" id="val4" onchange="showMonthlyPayment(this.value)">
                            <br><br>

<!--                            <button id="showMonthlyPayment" type="button" name="submit onclick="showMonthlyPayment()">Send</button>-->
                            <input type="submit" name="bereken" onclick="showMonthlyPayment()" value="submit">
                            <br> <br>
                            <div id="showMonthlyPayment_text"><h6>Your monthly payment amount:</h6></div>
                    </form>

                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    $rate = 0,  $months = 0, $creditAmount = 0, $residual = 0

    <script type="text/javascript">


        function showMonthlyPayment(aanbetaling, looptijd, aanschaf, slottermijn) {
            if (str=="") {
                document.getElementById("showMonthlyPayment_text").innerHTML="";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("showMonthlyPayment_text").innerHTML=this.responseText;
                }
            }
           // xmlhttp.open("GET","getamount.php?val1=&val2=&val3=&val4=&submit=send" + str,true);
            xmlhttp.open("GET","getamount.php?aanbetaling=&looptijd=&aanschaf=&slottermijn=&bereken=", true);
            xmlhttp.send();
        }
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

