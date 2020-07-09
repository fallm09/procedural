<?php
//function connectionDB(){
    $host = 'localhost';
    $dbName = 'createcompte';
//}

//create connection
function connexion(){
    
    $user = 'root';
    $password = '';
    $dns = 'mysql:host=localhost;dbname=createcompte';
    try { 
        return new PDO($dns,$user,$password, array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
        echo "<script> console.log('CONNECTED TO SERVER SUCCESSFULLY')</script>";
        }catch (Exception $e) {
            die("Erreur connexion base de données ".$e->getMessage());
        }
}


