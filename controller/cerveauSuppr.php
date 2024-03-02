<?php
    session_start();
    $tabResult=$_SESSION['resultat'];
    $tabA=$_SESSION['a'];
    $tabB=$_SESSION['b'];


    $i=$_GET['index'];
    unset($tabA[$i]);
    unset($tabB[$i]);

    $_SESSION['resultat']=$tabResult;
    $_SESSION['a']=$tabA;
    $_SESSION['b']=$tabB;
    header("Location: ../vue/resultModif.php");
    exit;
?>