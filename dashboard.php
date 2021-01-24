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
      <th scope="col">Nmae</th>     
      <th scope="col">is-compleated</th>
    </tr>
    </thead>
    <tbody>
    <?php include "data.php"?>
  <?php
  foreach( $Students as $key => $value){
    echo "<tr><td>".$value['id']."</td>
    <td >".$value['name']."</td>";
    $count = 0;
    for($i = 0; $i < count($value['projects']); $i++) {
      if($value['projects'][$i]['is_compleated'] == 'yes') {
        $count++;
      }
    }
    echo "<td>".$count."</td>";
  }
  echo "</tr>";

  
  ?>
  </tbody>
</table>

</body>
</html>