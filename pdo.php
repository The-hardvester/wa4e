<?php

$servername = "127.0.0.1";
$dbname = "misc" ;
$username = "root";
$password = "";


try {
    $pdo = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    /*
     GRANT ALL ON misc.* TO 'fred'@'localhost' IDENTIFIED BY 'zap';
     GRANT ALL ON misc.* TO 'fred'@'127.0.0.1' IDENTIFIED BY 'zap';
    
    $pdo-> exec($sql);
   */
    echo "<h3>connexion etablie !</h3>";
}

catch(PDOException $e){
    echo "Erreur:".$e->getMessage();
}

?>