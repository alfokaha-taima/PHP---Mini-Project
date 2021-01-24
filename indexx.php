<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP</title>
</head>
<style>
.row {
  margin: 0.5rem 1rem;
}
.m-card{
 margin-bottom:1.5rem
}
</style>
<?php include "navbar.php"?>
    <?php include "data.php"?>



<div class="row">
      


<!-- <div class="card" style="width: 18rem;"> -->

<?php 

// function Card(){
    //     echo ' <img src='. $val['image'] .' class="card-img-top" alt="...">
    //     <div class="card-body">
    //     <h5 class="card-title">'. $val['name'].' </h5>
    //     <a href="#" class="btn btn-primary">View</a>
    //     </div> ';
    
    
    //     $all=array($val["name"],$val["image"]);
    //     array_map("Card", $all);
    
    // }
    
    foreach($Students as $val){
        
        echo " <div class='col-md-3 m-card'>
        <div class='card' style='width: 18rem;'>
        <img src=". $val['image'] ." class='card-img-top' alt='...'>
        <div class='card-body'>";
        echo "<h5 class='card-title'>".$val['name']."</h5>
      <h5 class='card-title'>".$val['id']."</h5>
      <h5 class='card-title'>".$val['birthday']."</h5>
        <a href='profile.php' class='btn btn-primary'>View</a>
        </div></div>
        </div>";

       
 }
 

?>
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>