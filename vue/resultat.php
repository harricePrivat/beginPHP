<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/adminlte.min.css">
    <title>Document</title>
  </head>
<body class="hold-transition login-page">
<div class="login-logo">
    <b>Admin MULTIPLICATION</b>
  </div>
    <table class="table table-bordered" >
        <TR style="background-color:aquamarine">
            <TD>A</TD>
            <TD>B</TD>
            <TD>Resultat</TD>
            <TD>Action</TD>
        </TR>
    <?php
        
        $tabResult;
        $result=1;
         $a=$_POST['a'];
         $b=$_POST['b'];
        for($i=0;$i<=$b;$i++){
            $resultat=$i*$a;
            $tabA[$i]=$a;
            $tabB[$i]=$i;
           $tabResult[$i]=$resultat;
        }
        $_SESSION['resultat']=$tabResult;
        $_SESSION['a']=$tabA;
        $_SESSION['b']=$tabB;
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
              echo'<TR style="background-color:#990000">';
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

   <!-- <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Task</th>
          <th>Progress</th>
          <th style="width: 40px">Label</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Update software</td>
          <td>
            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
            </div>
          </td>
          <td><span class="badge bg-danger">55%</span></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Clean database</td>
          <td>
            <div class="progress progress-xs">
              <div class="progress-bar bg-warning" style="width: 70%"></div>
            </div>
          </td>
          <td><span class="badge bg-warning">70%</span></td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Cron job running</td>
          <td>
            <div class="progress progress-xs progress-striped active">
              <div class="progress-bar bg-primary" style="width: 30%"></div>
            </div>
          </td>
          <td><span class="badge bg-primary">30%</span></td>
        </tr>
        <tr>
          <td>4.</td>
          <td>Fix and squish bugs</td>
          <td>
            <div class="progress progress-xs progress-striped active">
              <div class="progress-bar bg-success" style="width: 90%"></div>
            </div>
          </td>
          <td><span class="badge bg-success">90%</span></td>
        </tr>
      </tbody>
    </table>
  </div> -->

    <script src="../assets/js/adminlte.js"></script>
</body>
</html>