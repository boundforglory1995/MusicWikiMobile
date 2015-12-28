<?php
session_start();
error_reporting(-1);
include('libary/counter.php');
include('config/config.php');
include('libary/functions.php');

include('libary/insertcomment.php');
include('views/head.php');


?>

<body> 
  <?php
  $p = isset($_GET['p']) ? $_GET['p'] : "";
switch($p){

  case 'maingenres':
    include('maingenres.php');
    break;
  case'core':
    include('core.php');
  
    
    break;

  case'metal':
    include('metal.php');
    

  case 'rock':
    include('rock.php');
    break;


    default:
    include('views/body.php');

}
?>

</body>
</html>