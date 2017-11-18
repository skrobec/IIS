
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$user="unknown";
if (isset($_GET['user'])) {
  switch ($_GET['user']) {
        case 'admin':
            $user='admin';
            break;

}
}

?>

<div class="jumbotron text-center">
  <h1>Oddělení</h1>
  <p>Vítejte v systému <?php echo $user; ?> </p> 
</div>


<nav id="menu" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Navigace</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="main.php">Home</a></li>
      <li><a href="#">Zaměstnanci</a></li>
      <li><a href="oddeleni.php">Oddělení</a></li>
      <li><a href="#">Zákroky</a></li>
      <li><a href="#">Léky</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="row">
   
   
      <div class="col-sm-4 pull-right row-height">
       
        <h3>Column 3</h3>        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
 
      </div>
    
  </div>
</div>

</body>
</html>