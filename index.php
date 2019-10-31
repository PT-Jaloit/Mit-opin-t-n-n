<?php

/*
    Yhdistetään tietokantaan käyttäen eri tiedostoa
    https://www.w3schools.com/php/php_includes.asp
*/

require_once("mysqlConnection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mitä ehkä opin tänään?</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body class="bg-dark text-white">
    <div class="container">
        <div class="otsikko bg-secondary mt-4 rounded">
            <h1 class="p-3">Mitä ehkä opin tänään?</h1>
        </div>
        <div class="lisaa_uusi mt-4">
            <form action="lisaa_oivallus.php" method="post">
                <input type="text" name="lisaa_uusi_oivallus"></input>
                <input type="submit" value="Lisää uusi">
            </form>
        </div>
        <div class="listaa_oivallukset mt-4">
            <table class="table table-dark">
                <tr>
                    <th>Päivä</th>
                    <th>Oivallus</th>
                    <th>Poista</th>
                </tr>
                <tbody>

<?php

include("listaa_oivallus.php");

?>

                </tbody>
            </table>
        </div>
        <div class="alaotsikko">
            Copyright 2019 Lorem ipsum
        </div>
    </div>
</body>
</html>
