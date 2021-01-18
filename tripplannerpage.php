<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <style>
        html,
        body,
        #intro {
            height: 100%;

        }

        #intro {
            background: url("images/i11.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
    <?php
include("nav.php");
?>


    <div id="intro" class="view">

        <div class="mask rgba-black-strong">

            <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                <div class="row d-flex justify-content-center text-center">

                    <div class="col-md-10">


                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 text-white">Trip Planner</h2>


                        <hr class="hr-light"><br><br>


                        <h4 class="white-text my-4 text-white">
                            Get most from your vacation with your
                            planning
                            tools.</h4>

                        <a class="btn btn-outline-light" style="font-size: 4vw;" href="hotelBook.php">
                            <h3 style="font-size: 3vw;">Book Hotels </h3>
                        </a><br><br>
                        <a  class="btn btn-outline-light" style="font-size: 4vw;" href="flightBook.php">
                            <h3 style="font-size: 3vw;">Book Flights</h3>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>
<?php
include("footer.html");
?>
</body>

</html>