<?php
    session_start();
    $newA=$_POST['a'];
    $newB=$_POST['b'];
    $tabResult=$_SESSION['resultat'];
    $tabA=$_SESSION['a'];
    $tabB=$_SESSION['b'];


    $i=$_SESSION['index'];
    $max=count($tabA);
    $tabA[$max]=$newA;
    $tabB[$max]=$newB;
    $tabResult[$max]=$newA*$newB;

    $_SESSION['resultat']=$tabResult;
    $_SESSION['a']=$tabA;
    $_SESSION['b']=$tabB;
    header("Location: ../vue/resultModif.php");
    exit;
?>