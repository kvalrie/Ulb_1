<?php
/*Version 2.0 , Ajax fonctionnel .
écrit et réalisé par Hugo Barcelona */


include 'bdd.php';



if(isset($_POST['proj']) === true && empty($_POST['proj']) === false ) {

    $proj = $_POST['proj'];


$resultat_proj = $bdd->query("SELECT * FROM ZProjet WHERE Idprojet = '$proj' ");


while ($donnee = $resultat_proj->fetch()) {

    echo '<h1>' . htmlspecialchars($donnee[('Nom')]) . '</h1><div class="description">';

    echo '<p>' . htmlspecialchars($donnee[('Idprojet')]) . '</p></div>';

}
$resultat_proj->closeCursor();

?>

<div class="responsable_Projet">
    <?php

    $resultat_proj_responsables = $bdd->query("SELECT ZChercheur.Nom, ZChercheur.Prenom, ZChercheur.Idche FROM ZChercheur INNER JOIN ZPResponsable ON ZChercheur.Idche = ZPResponsable.RefResp WHERE RefProj = '$proj' ");

    While ($donnee = $resultat_proj_responsables->fetch()) { ?>
<h3>Responsables :</h3>
        <ul class="nav flex-column">
            <li class="nav-item ">

                <a href='cher.php?cher="<?php echo $donnee[('ID_CHER')]; ?>"'
                   class=" nav-link active"><?php echo htmlspecialchars($donnee['Nom']) . ' ' . htmlspecialchars($donnee['Prenom']) ?>
                </a>
            </li>
        </ul>
        <?php

    }
    $resultat_proj_responsables->closeCursor();

    }?>
</div>
