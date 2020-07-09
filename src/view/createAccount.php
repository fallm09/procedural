<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>TEST | BANQUE DU PEUPLE | IN SYSTEM</title>
  <link rel="stylesheet" href="../../public/css/main.css">
  <link rel=" styleshhet" href="../..public/css/stylee.css">
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
  <!-- STARTING : CONTAINER GENERAL -->
  <div class="wrapper">
    <!-- STARTING : SIDEBAR -->
    <div class="sidebar">
      <h2><img class="sidebar_logo" src="../../public/img/BP-LOGO-SVG-WHITE.svg" alt="LOGO BANQUE DU PEUPLE" title="Vous d'Abord"></h2>
      <ul>
        <li><a href="../../index.php"><i class="fas fa-home"></i>Accueil</a></li>
        <li class=""><a href="createClient.php"><i class="fas fa-user-tie"></i>Creer un Client</a></li>
        <li class="active"><a href="#"><i class="fas fa-address-card"></i>Creer un Compte</a></li>
        <li><a href="#"><i class="fas fa-exchange-alt"></i>Faire un Virement</a></li>
      </ul>
      <div class="extra_option">
        <a href="javascript:return false;" title="Changer de Langue"><i class="fas fa-language"></i></a>
        <a href="javascript:return false;" title="Afficher Aide"><i class="fas fa-question-circle"></i></a>
        <a href="javascript:return false;" title="Se Déconnecter"><i class="fas fa-power-off"></i></a>
      </div>
    </div>
    <!-- ENDING : SIDEBAR -->

    <!-- STARTING : MAIN CONTENT -->
    <div class="main_content">
      <div class="header">
        <div class="next_nav">
          <!-- MENU HAUT - PARTIE GAUCHE -->
          <div class="display_header">
            <h2>BANQUE DU PEUPLE <span class="breadcrumb">>> Creation Compte</span></h2>
          </div>
          <!-- MENU HAUT - PARTIE DROITE -->
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-clock" aria-hidden="true"></i> <span class="">Time / Date</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-comments" aria-hidden="true"></i> <span class="">Support</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="">
                <i class="fas fa-user" aria-hidden="true"></i> <span class="">Account</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- // CONTENU CENTRAL :  -->

      <body onload="marem_epargne();">
        <div id="menuus">
          <form method="POST" id="compte_pour_client" action="../controller/Comptecontroller.php">
            <div id="btn_compte_epargne">
              <button id="epargne" value="1" name="typeCompte">compte epargne xeweul </button>
            </div>
            <div id="btn_courant">
              <button id="courant" value="2" name="typeCompte"> compte courant</button>
            </div>
            <div id="btn_bloque">
              <button id="bloque" value="3" name="typeCompte"> compte bloque</button>
            </div>
            <div id="xeweul">
              <label> frais d'ouverture</label>
              <input type="text" name="frais" id="frais_d_ouverture">
            </div><br>
            <div id="agios1">
              <label> Agios</label>
              <input type="text" name="agios" id="agios">
            </div><br>

            <div id="blocage">
              <label> delai de blocage</label>
              <input type="text" name="delai" id="delai_de_blocage">

            </div>
            <div id="duree">
              <br>
              <label> duree de blocage</label>
              <input type="text" name="blocage" id="dure_de_blocage">
            </div>
            <br>
            <div id="numero">
              <label> numero agence</label>
              <input type="text" name="agence" id="numero_agence">
            </div>
            <br>
            <br>
            <div id="rib">
              <label> cle rib</label>
              <input type="text" name="rib" id="cle_rib">
            </div>
            <br>
            <br>
            <div id="compte">
              <label> numero compte</label>
              <input type="text" name="numero" id="numer_compte">
            </div>
            <br>
            <input type="hidden" name="typeCompte" id="typeCompte" value="">
            <input type="submit" name="valider" id="valider" value="validation" />
            <br />
            <br />
            <!--<input type="reset" name="Annuler" id="Annuler" value="Annuler" />-->
        </div>

        </table>

      </body>

</HTML>
</div>
<!-- FIN CONTENU CENTRAL -->
</div>
<!-- ENDING MAIN CONTENT -->
</div>
<!-- ENDING CONTAINER GENERAL -->

<!-- Main JS -->
<script src="../../public/js/global.js"></script>
<script src="../../public/js/compte.js"></script>
</body>

</html>