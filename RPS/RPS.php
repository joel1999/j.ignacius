<?php
session_start();

include_once("class.TemplatePower.inc.php");

$template = new TemplatePower("RPS.html");
    $template->prepare();

$keuze =  array("Rock", "Paper", "Scissors");


if(!isset($_SESSION['computerscore']) AND !isset($_SESSION['playerScore']))  {
    $_SESSION['computerscore'] = 0;
    $_SESSION['playerScore'] = 0;
};

if(!isset($_POST['keuze'])){
    echo "<a id='maakkeuze'>Maak een keuze om te beginnen</a>";
    $_POST['keuze'] = 0;
};

if($_POST) {

    $spelerkeuze = $_POST['keuze'];
    $computerkeuze = rand(0,2);

    if($spelerkeuze == $computerkeuze){
        print "<h1>Het is gelijk spel</h1>";

    }elseif($spelerkeuze == 0 AND $computerkeuze == 1){
        $_SESSION['computerscore']++;
        print "<h1>Computer wint</h1>";

    }elseif($spelerkeuze == 1 AND $computerkeuze == 0){
        $_SESSION['playerScore']++;
        print "<h1>Speler wint</h1>";

    }elseif($spelerkeuze == 0 AND $computerkeuze == 2){
        $_SESSION['playerScore']++;
        print "<h1>Speler wint</h1>";

    }elseif($spelerkeuze == 2 AND $computerkeuze == 0){
        $_SESSION['computerscore']++;
        print "<h1>Computer wint</h1>";

    }elseif($spelerkeuze == 1 AND $computerkeuze == 2){
        $_SESSION['computerscore']++;
        print "<h1>Computer wint</h1>";

    }elseif($spelerkeuze == 2 AND $computerkeuze == 1){
        $_SESSION['playerScore']++;
        print "<h1>Speler wint</h1>";

}};

echo "<h2>Computer Score ".$_SESSION['computerscore'] ."</h2>";
echo "<h2>Speler Score ".$_SESSION['playerScore'] ."</h2><hr>";

print "<h3>".$keuze[$spelerkeuze] ." vs. ";
print $keuze[$computerkeuze] ."</h3><br>";

if(isset($_POST['reset'])){
    $_SESSION['computerscore'] = 0;
    $_SESSION['playerScore'] = 0;
}

$template->assign(array(
        "PLAYERSCORE" => $_SESSION['playerScore'],
    ));

$template->printToScreen();
