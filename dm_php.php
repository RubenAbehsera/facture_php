<?php

$date = date("d-m-Y");

date_default_timezone_set('Europe/Paris');
//On définit la date.

function recup_mois()
{
$mois_fr = array(
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "août",
    "septembre",
    "octobre",
    "novembre",
    "décembre",
);

    $index= date("m")-1;

    return($mois_fr[$index]);
}

function recup_jour()
{
    $jour_fr=array(
    "dimanche",
    "lundi",
    "mardi",
    "mercredi",
    "jeudi",
    "vendredi",
    "samedi",
    
    );
    $index=date("w");
    return($jour_fr[$index]);
}

//On définit l'entête du tableau
$titres = array('Référence','Libélée','Prix HT','Quantité','Total');
//On définit les colonnes du tableau avec un tableau multidimensionelles
$tableau= array(
    array(
        "Référence"=>mt_rand(1000,9000),
        "Libélée"=>"Champagne Ruinart rosé + coffret",
        "Prix HT"=>50,
        "Quantité"=>mt_rand(20,50),
    ),
    array(
        "Référence"=>mt_rand(1000,9000),
        "Libélée"=>"Champagne Ruinart 2010 (sans étui)",
        "Prix HT"=>30,
        "Quantité"=>mt_rand(20,50),
    ),
    array(
        "Référence"=>mt_rand(1000,9000),
        "Libélée"=>"Champagne R de Ruinart brut",
        "Prix HT"=>20,
        "Quantité"=>mt_rand(20,50),
    ),
    array(
        "Référence"=>mt_rand(1000,9000),
        "Libélée"=>"Duo Champagne R de Ruinart",
        "Prix HT"=>60,
        "Quantité"=>mt_rand(20,50),
    ),
    
    array(
        "Référence"=>mt_rand(1000,9000),
        "Libélée"=>"Dom Ruinart rosé millésimé 2002",
        "Prix HT"=>170,
        "Quantité"=>mt_rand(20,50),
    )
);

$facture=mt_rand(20,600);

foreach($tableau as $valeur){
    $montant_HT_total +=$valeur["Prix HT"]*$valeur["Quantité"];
}
//On calcule l'addition des valeurs de la dernière colonne du tableau
// le += permet d'ajouter la valeur de la variable à celle-ci
$tva=1.2; 
$montant_ttc=$montant_HT_total*$tva;
$montant_tva=$montant_ttc-$montant_HT_total;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="dm_php.css">
    <title>Facture</title>

</head>

<body>
<div class="section">
        <table class=table>
    <?php
    for ($i = 0; $i < count($titres); $i++)
    {
        echo("<th>".$titres[$i]."</th>");
    }
    ?>
    
            <img class="logo" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAGwAlwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAQQFBgcDAv/EAEIQAAIBAwIDBQQFCgQHAQAAAAECAwAEEQUhBhIxBxNBUWEUInGBMkKRobIVIzZSYnSxwdHwJDVU8RYzQ3JzgrM0/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECA//EABwRAQEBAAIDAQAAAAAAAAAAAAABEQIhEkFRYf/aAAwDAQACEQMRAD8A3GiiigKKKKAooooEZgoJY4A6mm8d7BLKsaElmXnGVIyPnTTU5UeTumaZVXAbu3x19PGoqS8JWIAyNKmPec77bj7f61z5c8anHUlNcPa97AZgH5g8buwxynw3+Brz7ZAL1rkOu8fJjnXbfqfT+/GiOOe7nbMuMKCpJIJB+GPLOK5hc3Hs/f8AvZK5w2M+XX1qbV6d7a4kuzBEsuXQ880iEYIHQbef8qeG+gSSSNmOY8c5wcDPTeox+9s7or3hOIectknxwOudv60zguR3fckyxsx5WZSeYjOfiOp/s08s6M1aAc0tR2mSqD3QMpBXmXvH5tunyqRrpLrNmCiiiqgooooCiiigKKKKAooooCkPSlooIie0kN7gnmRsvj4HxPXxFcjDGSpS2TuSoVWP0pGx5A+XnT69kZJo9h7vvA/aDk+A6fdTNxHAjSq8SyStnliycnfpj0NcrG9rw9zPbXb5AHuDHMvgB6fOgvKn+OMMYPXO/MAfEjPTc14khuIitxeQmUKmAAcknw564e0hZBc95zSsSGBHukeXw6bVm36rus0t1fMHUNmAoeRfpDPqa6pEhLM9vGIz9Fx9Vs7jB3xn/auEcFyZJLm1jeOLlAAY4bGx2Hl4U5j7uQR3PeQs8ZziTbl6/E53qz9SvdlayJeE5ISIjCk52w2Bn/2/hUtTOwZm7zI25iSfHJJ+3w+WKeV04zpmiiiitIKKKKAooooCimeoarp+mmAaheQWxuH5Iu9cLzt5DNO8igWimUmq6fHqSabJeQLeyJzpblwHYeYFPRvQFFFFA0u7FbmRXMjqQvLsfCmjaR3SM1rM6y42Ofu9KlqQ1m8ZV2o4pmWeNA4MaqwLXD4Oc9d/Smq28PJBdezjmkYYHfPk5OxHy3qWa3jYyErnvV5X3O4/smvMlpDI0ZdMmPZcMRj7Kl4mmCv3lzJbqsquFfl/PvkY2BO/Q52r0NHEgDTzu0mPePTJqRWJBK0oX32ABOfAV0q+P001s7NbUuVkdi+M8x8qdUUVqTEFFFFAUUUUBRRRQYj2u8OajayRa5qGqC9E8nc913XIsOxICjJ22Pr8an+zLW9Sv+HbXSIZJPaQ0v8Ai515lhhUqML+u3vDHgPHyLntz/Ra0/fV/A1M+x7/APDp/wAL38cNQUntH4duuGuIUma9nuVu8zQ3MjfneZSMgkeIyMH19K27gzUJ9V4V0u+uyDcTW6mRh9ZhsT88Zqh8Y2x7QeLbbSdKuIxZ6Wre13QYH3mIyEH1iAuPLJq+Xd1Y8KaBGscEpt7WNYYLeBC7vgYCgD0HX50E1mism4Q7U7y+18WOs2sSwXc3JA0IOYCThVb9YeGdj6eVi7RuNpOHLMwadA0t8+AZTGTFb56Fj0LHwX+zRd/Das67W5uJ4rey/IveLZGVe8a2J73vM+4D+znHxPXapDs643/4ps5o7yFYb+0UGYp/y3U/WGenQ7VW+K+1O9sdcjh0ixBs4t3a6jZDcjplPJfI75+HWDSOH21NtHtW1tYV1AxjvhD9HP8AXz9akMioCLiuxk4Xh18R3BhmTKQJGWlZ8kcgA6nIPptmqDw92tXM2vPDrNoqWNxJyw90pMluc4AI+t67Zz9gujXcilrMePeN+JtGmgksdHNpYcw/xF0nP3v7JAPufPf4VZOBeNLXiy0flj9nvoQDNb5yMH6ynxH8P4zRaqM0w1XVrXTO4SZi9xcPyW9umOeZsZwoPoOp2FZfxF2h8W6Hrg9s0aG0siSEt5Rzd4o8RKDjPwzjyPWmjX6M1X9C4t07WeHTrUfPFDHlZo2XLI4x7uB1O4xjrkVnzdrl3DxK4udP7vSAwQwupWeMfrn1/Z8vHzaNhqN4g1ux0DTJdQ1CXkiQbKN2c+CqPEms81ztUutM4lEH5KYaYqDKzKY5pQdxIudgPIHr5jwrva7qUurT6NcvbXNpFNbM6QXGOYAtsxUEgE/wxTRt2mXYv9OtbwIUE8SycpOcZGcUVn/BPHV1q1pb6Vo+gyTy2kCJJLLcBIlwMbtgkZxsMUU0e+3P9FrT99X8DVC9nOmR6xoVlZzXN1BE4vec20vdsw5ods+XpU125/otafvq/gao/sdnhNraRiRS8S3nOud1y0JGaexTOM+F7vgXVbWSzvmMcnM1rOh5JEK4yDj4jcbGtr4I1K61nhbT9QvwntM0eXKDAYgkZx4ZxmqB29IS+iSY90d+v4P6VcOy+7gm4G0wRyKTChjcZ3Vgx2NBlWposfa86RqFX8rxnAHiSpP3k1svHMavwfrIdQw9kkOCPTasZ1yRIe1yWWV1SNNViLMxwAPd61s3Gzr/AMH6wSQAbOTcnb6NBm3YP/mmr/8Agj/E1SXbzGn5P0iTlUv37rzY3wV6fcKjOwiRBq+qoWHO1uhC53IDHP8AEVK9vBzpWkEf6l/wUFm7K/0C0r/tk/8Ao1ZXxMiR9rkiooUHUYCQB4nkJrUeyiVH4C0wIwbl7xWweh7xtqy3i11j7WpZJGCot/blifAYSp6G1cXQxzcLaskyK6G0lJVhkZCkiso7Cf0i1H1sx+MVrPFDA8Narj/Ry/gNZL2FMo4jvlLAM1lsM9cOtUWDjDs+1jXOMIdQj1P/AATlcsWw9oAOiDx3G3qd6ddsL20PBaWTzh7hZoSglbmkIBwWPy6n1rn2h8d3GlaxBoWnOLZ3MftN4QCYkY/UB2zjfJ6V77U9PtNP4AmWzT6dxCXlZi7ynm+kzHdj6mgXsP34Uuf31/wrVL7bUVeMEZVALWSFiB1PMw3+6rl2GyoeGLxAwLresWXO4BRcVTu2/wDS6L9xT8T09DZ4tOsr20sZLy0t53hRGjaWJXKHA3BPSsl7eP8AO9N/dG/FWw6ZKkmm2rxsGRoUIZdwRgVj3bvvremfurfipRqnCkMUXDummKNE57WItyKBk8o60teOD50n4V0mRHVgbSPdTkZCjNLVHLjLhq34p0ZrCeRonDd5DKu/I4BwSPEbnaqXwL2YS6ZqL32vyJK0T4gghc8j/tP0yPJT8/CtRooK3xxwnBxZpa20kpguIWL28w3CtjoR4g1Wez3s4l0W5e/1xkkuFf8AMwROTGMdHbpk+Wenx6aQsiOCVdWwcHBpDIipzl1C/rE7VBnPaD2anXLuTVdGdIr6QfnopDhJiBjIPg2APQ48KkeG+BpYuH/YOJr+fUOaMqtuZCYrbI+r4kjwJ6eAHjdVljZgBIpJGQAeopBNERtKh69GHh1p0Ml0jslvLXiPNzqDfkuL3llgkMc0o/UOPo+pHyx4XXjbg6DiXQ4bGF/ZpbU81qR9FdscpHlj7Ks4dSvMrAr5g7UhljBwZFBxnc+HnQZ/2c9n82gFr3WJi91znureOUmKPw5iOjMR442HrTPtA7NLnWtWOq6NPGJrhlFxDM2B0A5lPw6j02rTO9jyB3iZIyBkbik7+H3fzsfvdPeG9OhBaFwpZ6ToUumPJPdG4iKXM8shLSZGMDf3VGdgOnx3qg6f2R3dtxGDJqLLpUfvLNDIUncfqHHT1I+WPDW+/hxnvUxv9YeHWgzxDrKg+LCgz7tB7Ojrot7vRWjhureIQmGQ4WRB038CPvrvpfAV1c8KnSuJ9WubpmQdzGj+5aEdMHq5H7WR4AVfO8QcpLrhvo79aO8TJHOvunB36U6GWcH9l13p2sS3GsXnNaxN+bitpGUXPiOf9n9nxPp1le0ngGTiVo9Q0yVUv4YxGYpDhJUBJAz9UjJ3/wB6vpljUsDIgK9csNqDJGOXLqOb6O/WnQrHAfCC8MacouJ3uL51xI5clIx+og8B/H7AGvaHwMvFcMVxbz9xqFupWMvko6k55SPD4irj3secd4mc8vXx8q91RQuzngSXh+L2rV5jLeHPJAshMMAPUgdCx8/L55KvtFAUhpaKCPS2uEjljUxBZHdiwJz7x+Hxo9jl/J72vMp3whPguds7eAqQpKzkXTFLWSGZXgWMKEK+8xJyWyT0risKsrwd7A3KJABzb7tk5HhipSoKKZpNTaJgMJcO4PjkLj+dZuRZ2e26GSxMMc6OSTzMrZ90nPXG5x9tNTArQqjXUIMKsiSc24ycDPyGDXrQ5DLbNGdh3SdOu4I/kKai5d7FoyFASJFBAwccwH8qmxUjHGFklZZIXXvFLMx3QgAY+7764x2rRvEO8h5reM8w5z0LZBO3TauOe9M9u3/La4fO5zsmRv8AEU1lnedFkkPvPAqtj6wKO2/zUVPKGJBbdGdljmh5pEbMXNkEt0I+VElkFhbE0fdiRSuWxygZ93Px2FcI5SZZ5ioLxW0bp1wG5Tv95pAxheRE+jBNG6A+bLvn7SfjV2B7cKs1rDH30Ksvvgq2wxnBHwOPsriLfvEe39oizK5kPK/vE8u3h5jNcCzTwxlz74hlkVxsVIbwroszLqyqAP8Apr49OU00w6e0ncSGQx8zrGCVYjdTnrjakNhKYpELI3exCMsRuuM7jb19N6khRW/GM6YrZsLoT5VffJZRvzDBAPxGaf0UVZMQUUUVR//Z"
                alt="logo">
            <div class="client">
                <p class="client-text">Client:</p>
                <img class="client-logo" src="https://medias.nicolas.com/media/sys_master/images/hb9/h04/8796200861726.png"
                    alt="logo">
                <p class="client-info">ETABLISSEMENT NICOLAS<br>Adresse :<br> 1 Rue du Château d'Eau <br> 75010 Paris</p>
            </div>
            <div class="information">
            <p class="facture">
                Facture n°
                <?php echo($facture); ?>
            </p>
            <p class="commande">
                Commande effectuée le : Vendredi 14 décembre
            </p>
            <p class="date">
                éditée le
            
                <?php echo(recup_jour()." ".date("d")." ".recup_mois());?>
                </p>
            </div>
        <?php
        echo("<br><br>");
    
    foreach($tableau as $valeur){
        echo("<tr>");
        echo("<td>".$valeur["Référence"]."</td>");
        echo("<td>".$valeur["Libélée"]."</td>");
        echo("<td>".$valeur["Prix HT"]." € </td>");
        echo("<td>".$valeur["Quantité"]."</td>");
        echo("<td>".$valeur["Prix HT"]*$valeur["Quantité"]." € </td>");
        echo("</tr>");
    }
//On a crée une boucle pour afficher les colonnes du tableau
    ?>
        </table>
        <div class="box-down">
            <p class="price">Montant HT :
                <?php 
            echo($montant_HT_total." €");
        ?>
            </p>
            <p class="tva">TVA
                <?php
            echo("(20%) ");
            echo(" : ".$montant_tva." €");
            
        ?>
            </p>
            <p class="priceTTC">Montant TTC:
                <?php 
            echo($montant_ttc." €");
        ?>
        </div>
        <input type="button" value="Imprimer" onClick="window.print()" class="print">

        <footer class="footer">

            En cas de retard de paiement, seront exigibles, conformément à l’article L 441-6 du code de commerce, une
            indemnité calculée sur la base de trois fois le taux de l’intérêt légal en vigueur ainsi qu’une indemnité
            forfaitaire pour frais de recouvrement de 40 euros.
            <p class="down">5-9 rue de l’Industrie, 93200 Saint-Denis, France,
                N° tél : + 33 (0) 3 26 77 51 51,
                N° de SIRET:33568113600016,
                ID TVA : FR 44 509 553 459
            </p>

        </footer>
    </div>
</body>

</html>

</p>
</body>

</html>