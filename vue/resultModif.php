<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/adminlte.min.css">
    <title>A et B</title>
</head>
<body class="hold-transition login-page">
<div class="login-logo">
    <b>Admin MULTIPLICATION</b>
  </div>
<table   class="table table-bordered">
        <TR>
            <TD>A</TD>
            <TD>B</TD>
            <TD>Resultat</TD>
            <TD>Action</TD>
        </TR>
        <?php 
        $tabA=$_SESSION['a'];
        $tabB=$_SESSION['b'];
        $tabResult=$_SESSION['resultat'];
        for($i=0;$i<count($tabResult);$i++){
           if($tabA[$i] !=null && $tabB[$i] && $tabResult[$i]!=null){
                if($tabResult[$i]%2==0){
                    echo '<TR style="background-color:#009900">';
            echo "<TD>$tabA[$i]</TD>";
            echo "<TD>$tabB[$i]</TD>";
            echo "<TD>$tabResult[$i]</TD>";
            echo "<TD>
            <a href=\"ajout.php\">Ajouter</a>
                    <a href=\"modification.php?a=$tabA[$i]&b=$tabB[$i]&index=$i\">modifier</a>
                    <a href=\"../controller/cerveauSuppr.php?a=$tabA[$i]&b=$tabB[$i]&index=$i\">supprimer</a>
                </TD>";
            echo '</TR>';       
                }
                else{
                    echo '<TR style="background-color:#990000">';
            echo "<TD>$tabA[$i]</TD>";
            echo "<TD>$tabB[$i]</TD>";
            echo "<TD>$tabResult[$i]</TD>";
            echo "<TD>
            <a href=\"ajout.php\">Ajouter</a>
                    <a href=\"modification.php?a=$tabA[$i]&b=$tabB[$i]&index=$i\">modifier</a>
                    <a href=\"../controller/cerveauSuppr.php?a=$tabA[$i]&b=$tabB[$i]&index=$i\">supprimer</a>
                </TD>";
            echo '</TR>';
                }
            
           } 
            
        }
        ?>
</table>
<script src="../assets/js/adminlte.js"></script>
</body>
</html>