
<?php
/*include 'bdd.php';

if(isset($_GET['unit']) === true && empty($_GET['unit']) === false ) {

    $unit = $_GET['unit'];


    /* $resultat_unit = $bdd->prepare('SELECT * FROM ZUnité WHERE ID_UNIT = ? ');*/

    $resultat_unit = $bdd->query('SELECT * FROM ZUnité WHERE ID_UNIT = ' . $unit . ' ');


    /*    $resultat_unit->execute(array($unit));*/


    while ($donnee = $resultat_unit->fetch()) {

        echo '<h1>' . htmlspecialchars($donnee[('ID_UNIT')]) . '</h1><div class="contact">';

        echo '<p>Tel :' . htmlspecialchars($donnee[('Tel')]) . '</p>';
        echo '<p>Email :' . htmlspecialchars($donnee[('Email')]) . '</p></div>';

    }
    $resultat_unit->closeCursor();
    */?><!--


    <div class="composition">
        <H3>Composition : </H3>
        <?php
/*        $resultat_unit = $bdd->query('SELECT ZChercheur.Nom, ZChercheur.Prenom, ZUCompos.responsable, ZUCompos.ID_UNIT FROM ZChercheur INNER JOIN ZUCompos ON ZChercheur.ID_CHER = ZUCompos.ID_CHER WHERE ID_UNIT = ' . $unit . ' AND responsable = "NON" ');

        while ($donnee = $resultat_unit->fetch()) {
            echo '<p>' . htmlspecialchars($donnee[('Nom')]) . ' ' . htmlspecialchars($donnee[('Prenom')]) . '</p>';

        }
        $resultat_unit->closeCursor();

        */?>
    </div>
    <div class="projet">
        <H3>Projets : </H3>
        <?php
/*        $resultat_unit = $bdd->query('SELECT ZProjet.ID_PROJ,ZProjet.Nom, ZProjet.Fin FROM ZProjet INNER JOIN ZUprojet ON ZProjet.ID_PROJ = ZUprojet.ID_PROJ WHERE ID_UNIT = ' . $unit . ' ');

        while ($donnee = $resultat_unit->fetch()) {
            */?>
            <ul class="nav flex-column">
                <li class="nav-item ">

                    <a href='unit.php?proj="<?php /*echo $donnee[('ID_PROJ')]; */?>"'
              -->         class="proj_a nav-link active"><?php echo htmlspecialchars($donnee['Nom']) ?>
                    </a>
                </li>
            </ul>
            <?php

        }
        $resultat_unit->closeCursor();

        ?>

    </div>
    <?php
}
            ?>

