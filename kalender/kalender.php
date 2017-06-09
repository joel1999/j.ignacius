<?php
date_default_timezone_set('Europe/Amsterdam');

if(isset($_GET['maand'])){
    $maand = date("m") + $_GET['maand'];
    $min = $_GET['maand'] - 1;
    $plus = $_GET['maand'] + 1;
}else{
    $maand = date("m");
    $min = -1;
    $plus = 1;
}

// maand en jaar van servertijd
$jaar = date("Y");


$eersteDagvdMaand = mktime(0, 0, 0, $maand , 1, $jaar);
// print $eersteDagvdMaand;

$eersteDagMaandNr = date("N", $eersteDagvdMaand);
// print $eersteDagMaandNr;

$aantalDagenMaand = date("t", $eersteDagvdMaand);

// print $aantalDagenMaand;



print "<br>
<a href='kalender.php?maand=$min'>Vorige</a>
<a href='kalender.php?maand=$plus'>Volgende</a>"

?>


<table border="1">
    <tr>
        <th>Maandag</th>
        <th>Dinsdag</th>
        <th>Woensdag</th>
        <th>Donderdag</th>
        <th>Vrijdag</th>
        <th>Zaterdag</th>
        <th>Zondag</th>
    </tr>
    <tr>
        <?php
        if($eersteDagvdMaand != 1) {
            for ($j = $eersteDagMaandNr; $j > 1; $j--){

                print "<td></td>";
            }
        }

        // alle dagen vd maand
        $teller = $eersteDagMaandNr;
        for($i = 1; $i <= $aantalDagenMaand; $i++){
            if($teller == 8){
                $teller = 1;
                print "</tr> <tr>";
            }

            print "<td>$i</td>";
            $teller++;
        }

        // lege vakjes op het einde
        for($k = $teller; $k < 8; $k++){
            print "<td></td>";
        }

        ?>

</table>