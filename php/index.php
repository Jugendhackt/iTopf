<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
     <title> iTopf </title>
     <link href="design.css"
     type="text/css" rel="stylesheet"/>
  </head>


<body>
  <div class="content">
    <h1 style="text-align: center;">iTopf</h1>
    <h3>Auswertung der Werte:</h3>

    <?php

    $servername = "127.0.0.1" ;
    $username = "python";
    $password = "itopfpython01";
    $dbname="python";

    $conn = new mysqli($servername, $username, $password, $dbname);

//Wasser
    $sql = "SELECT data FROM data where function = 'water' order by id desc limit 1";
    $result = $conn->query($sql);
    $row=mysqli_fetch_row($result);
    $water=$row[0];
//Licht
    $sql = "SELECT data FROM data where function = 'light' order by id desc limit 1";
    $result = $conn->query($sql);
    $row=mysqli_fetch_row($result);
    $light=$row[0];

    ?>

    <table class="tg">
      <tr>
        <th>Wärme</th>
        <th>Feuchtigkeit</th>
        <th>Licht</th>
      </tr>

      <tr>
        <td></td>
        <td> <?php echo($water); ?> </td>
        <td> <?php echo($light); ?></td>
      </tr>
    </table>


    <span style='font-size:9px;'> </span>
  </div>
</body>
</html>
