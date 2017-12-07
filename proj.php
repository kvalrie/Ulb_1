<?php
/*
if(isset($_GET['proj']) === true && empty($_GET['proj']) === false ) {
$proj = $_GET['proj'];


$resultat_proj = $bdd->query('SELECT * FROM ZProjet WHERE ID_PROJ = ' . $proj . ' ');

print_r($resultat_proj);
while ($donnee = $resultat_proj->fetch()) {

    echo '<h1>' . htmlspecialchars($donnee[('ID_PROJ')]) . '</h1><div class="description">';

    echo '<p>' . htmlspecialchars($donnee[('Nom')]) . '</p></div>';
    print_r($donnee);
}
$resultat_proj->closeCursor();
print_r($donnee);
*/?><!--

<div class="responsable_Projet">
    <?php
/*
    $resultat_proj_responsables = $bdd->query('SELECT ZChercheur.Nom, ZChercheur.Prenom, ZChercheur.ID_CHER FROM ZChercheur INNER JOIN ZPResponsable ON ZChercheur.ID_CHER = ZPResponsable.ID_CHER WHERE ID_PROJ = ' . $proj . ' ');

    While ($donnee = $resultat_proj_responsables->fetch()) { */?>

        <ul class="nav flex-column">
            <li class="nav-item ">

                <a href='cher.php?cher="<?php /*echo $donnee[('ID_CHER')]; */?>"'
                   class=" nav-link active"><?php /*echo htmlspecialchars($donnee['Nom']) . '' . htmlspecialchars($donnee['Prenom']) */?>
                </a>
            </li>
        </ul>
        <?php
/*
    }
    $resultat_proj_responsables->closeCursor();

    }*/?>
</div>-->