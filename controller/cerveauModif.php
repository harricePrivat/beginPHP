<?php
    session_start();
    $newA=$_POST['a'];
    $newB=$_POST['b'];
    $tabResult=$_SESSION['resultat'];
    $tabA=$_SESSION['a'];
    $tabB=$_SESSION['b'];


    $i=$_SESSION['index'];
    $tabA[$i]=$newA;
    $tabB[$i]=$newB;
    $tabResult[$i]=$newA*$newB;

    $_SESSION['resultat']=$tabResult;
    $_SESSION['a']=$tabA;
    $_SESSION['b']=$tabB;
    header("Location: ../vue/resultModif.php");
    exit;
?>