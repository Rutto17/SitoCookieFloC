<!DOCTYPE HTML>
<html>
<?php 
header("Permissions-Policy: interest-cohort=()");// questo blocca il calcolo della coorte 
?>
<head>
    <meta charset="utf-8"> 
    <title>Davide Savietto</title>            
    </head>
    <body> 
    <script src="jquery-3.6.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="it_cookie_law.js"></script>
    </head>
    <body>
    <?php  
    //fai il set cookie di sta roba 
     echo '<p>User IP Address - '.$_SERVER['REMOTE_ADDR']."</p>";  
?>
<form action="index.php">
    <input type="submit" value="Vai ai FloC" />
    </form>
  </body>
</html>

