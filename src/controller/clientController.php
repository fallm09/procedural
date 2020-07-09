<?php
require_once '../model/db.php';

// recuperer la chaine de connexions
$db = connexion();

if(isset($_POST['valider'])){
    extract($_POST);//importe les variables
    //var_dump($_POST); //affiche les informations d'une variable 
    //die;//
    if($typeclient=='1'){
        //la requete sql d'insertion
        $sql = "INSERT INTO `clientmoral`(`id`, `nomEntreprise`, `raisonSocial`, `adresse`, `email`, `telephone`) VALUES (NULL,:nomEntreprise,:raison,:adresse,:email,:telephone)";


        //preparé la requete 
        $a = $db->prepare($sql);
        //le tableaux des parametres
        $tab = [
            'nomEntreprise'=>$nomClientMoral,   
            'raison'=>$raisonSocialClientMoral,
            'adresse'=>$adresseClientMoral,
            'email'=>$emailClientMoral,
            'telephone'=>$telephoneClientMoral
        ];
        //executer la requete
        $b = $a->execute($tab);
 
        if($a)
            echo 'Client Inseré';
        else 
            echo 'Client Non Inseré';
    } else{
        if($typeclient=='2'){

            $sql= "INSERT INTO `clientphysique`(`id`, `nom`, `prenom`, `adresse`, `telephone`, `email`, `salaire`, `profession`, `idEmployeur`) VALUES(NULL,:nom,:prenom,:adresse,:telephone,:email,:salaire,:profession,NULL)";
            $a=$db ->prepare($sql);
            
            $tab =[
                'nom'=>$nomclientphysique,
                'prenom'=>$Prenomclientphysique,
                'adresse'=>$adresseclientphysique,
                'telephone'=>$telephoneclientphysique,
                'email'=>$emailclientphysique,
                'salaire'=>$salaireclientphysique,
                'profession'=>$professionclientphysique
            ];
            $a = $a->execute($tab);
            //var_dump($a);
            
        }
    }
}


 



?>



