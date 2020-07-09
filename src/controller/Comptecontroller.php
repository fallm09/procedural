<?php
require_once '../model/dp1.php';


$db = connexion();

if (isset($_POST['valider'])) {
    extract($_POST);
   /* var_dump($_POST);*/
    /* ["numagence"]=> string(8) "def2322u
*/
    if ($typeCompte =='1'){
        $sql = "INSERT INTO `epargne-xeweul`(`fraisOuverture`, `numeroAgence`, `cleRib`, `NumeroCompte`) VALUES(:fraisOuverture,:numeroAgence,:cleRib,:NumeroCompte)";

        $a = $db->prepare($sql);
        $tab = [
            'fraisOuverture' => $frais,
            'numeroAgence' => $agence,
            'cleRib' => $rib,
            'NumeroCompte' => $numero
        ];
        $b = $a->execute($tab);
        if ($a)
            echo 'client insere';
        else
            echo 'non insere';
    } else {
        if ($typeCompte =='2') {
            $sql = "INSERT INTO`compte courant`(`Agios`, `numeroAgence`, `cleRib`, `NumeroCompte`) VALUES(:Agios,:numeroAgence,:cleRib,:NumeroCompte)";
            $a = $db->prepare($sql);
            $tab = [
                'Agios' => $agios,
                'numeroAgence' => $agence,
                'cleRib' => $rib,
                'NumeroCompte' => $numero,

            ];
            $a=$a->execute($tab);
            var_dump($a);
        } else {
            if ($typeCompte =='3') {
                $sql = "INSERT INTO  `compte bloque`(`fraisOuverture`, `delaiDeBlocage`, `numeroAgence`, `cleRib`, `NumeroCompte`) VALUES(:fraisOuverture,:delaisDeBlocage,:numeroAgence,:cleRib,:NumeroCompte)";
                $a = $db->prepare($sql);
               //var_dump($a);
                $tab = [
                    'fraisOuverture' =>$frais,
                    'delaisDeBlocage' =>$delai,
                    'numeroAgence' =>$agence,
                    'cleRib' => $rib,
                    'NumeroCompte' => $numero,
                ];
                
                $a=$a->execute($tab);
                var_dump($a);

            }
        }
    }
}
