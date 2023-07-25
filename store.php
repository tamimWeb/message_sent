<?php 
if(isset($_POST["btn"])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text_flied'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="card"   style="width: 18rem; ">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Name: <?php if(isset($name)){
        echo "$name";
    } ?>  </li>
    <li class="list-group-item">Email: <?php if(isset($email)){
        echo "$email";
    } ?> </li>
    <li class="list-group-item">Message: <?php if(isset($text)){
        echo "$text";
    } ?> </li>
  </ul>
</div>
</body>

