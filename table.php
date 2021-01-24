<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php include "navbar.php"?>
<!-- ------------------------ -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">check-in</th>
      <th scope="col">check-out</th>

    </tr>
    </thead>
    <tbody>
    <?php include "data.php"?>
    <?php
      foreach( $Students as $key => $value) {
        $time_in = explode(' ',  $value['attendance'][0]['check_in']);
        $time_in = explode(':',  $time_in[3]);
        $time_out = explode(' ',  $value['attendance'][0]['check_ out']);
        $time_out = explode(':',  $time_out[3]);
        if(($time_out[0] - $time_in[0]) < 8) {
          $sty = "table-danger";
        } 
        elseif(($time_out[0] - $time_in[0]) == 8) {
          if($time_out[1] < $time_in[1]) {
            $sty = "table-danger";
          } else { $sty = "table-success"; }
        }
         else {$sty = "table-success"; }
        echo "<tr class=".$sty.">
        <th>".$value['id']."</th>
        <th>".$value['name']."</th>
        <th>".$value['attendance'][0]['check_in']."</th>
        <th>".$value['attendance'][0]['check_ out']."</th>
        <th>".$value['attendance'][1]['check_in']."</th>
        <th>".$value['attendance'][1]['check_ out']."</th>
        </tr>";
      }
    
    ?>
  </tbody>
</table>

</body>
</html>