<?php
/*Version 2.0 , Ajax fonctionnel .
écrit et réalisé par Hugo Barcelona */

include 'bdd.php';


if(isset($_POST['unit']) === true && empty($_POST['unit']) === false ) {

    $unit = $_POST['unit'];

    $requete = $bdd->query("SELECT * FROM ZUnite WHERE Idunite = '$unit' ");



    while($bdd_unit_data= $requete->fetch()) {

        echo '<h1>' . htmlspecialchars($bdd_unit_data[('Nom')]) . '</h1>
        <p>'. htmlspecialchars($bdd_unit_data[('Idunite')]) .'</p><div class="contact">';
        if (!empty($bdd_unit_data[('Tel')])) {
            echo '<p>Tel :' . htmlspecialchars($bdd_unit_data[('Tel')]) . '</p>';
        }
        if (!empty($bdd_unit_data[('Email')])) {
                echo '<p>Email :' . htmlspecialchars($bdd_unit_data[('Email')]) . '</p></div>';
        }

    }
    $requete ->closeCursor();
    ?>


    <div class="composition">
        <H3>Composition / Members :</H3>
        <?php
        $resultat_unit = $bdd->query("SELECT ZChercheur.Nom, ZChercheur.Prenom, ZUCompos.Responsable, ZUCompos.Refunite FROM ZChercheur INNER JOIN ZUCompos ON ZChercheur.Idche = ZUCompos.Refche WHERE Refunite = '$unit'  AND responsable = 'NON' ");

        while ($donnee = $resultat_unit->fetch()) {
            echo  htmlspecialchars($donnee[('Nom')]) . ' ' . htmlspecialchars($donnee[('Prenom')]).'<br>';

        }
        $resultat_unit->closeCursor();

        ?>
    </div>
    <br>
    <div class="projet">
        <H3>Projets / Projects : </H3>
        <?php
        $resultat_unit = $bdd->query("SELECT ZProjet.Idprojet,ZProjet.Nom FROM ZProjet INNER JOIN ZUprojet ON ZProjet.Idprojet = ZUprojet.Refprojet WHERE Refunite = '$unit' ");

        while ($donnee = $resultat_unit->fetch()) {
            ?>
            <ul class="nav flex-column">
                <li class="nav-item ">

                    <a href='unit.php?proj="<?php echo $donnee[('Idprojet')]; ?>"' data-linkproj="<?php echo $donnee[('Idprojet')];?>" id="<?php echo $donnee[('Idprojet')];?>"
                       class="proj_a nav-link active"><?php echo htmlspecialchars($donnee['Nom']) ?>
                    </a>
                </li>
            </ul>
            <?php

        }
        $resultat_unit->closeCursor();

        ?>

    </div>

<script src="jquery-2.2.4.js"></script>
<script type="text/javascript">

    $('.proj_a').click(function() {
        var link = $(this).attr('data-linkproj');
        console.log(link);
        var url = 'project.php';
        console.log(url);
        $('#mainproj').load(url, {proj : link});
        return false;
    });

</script>

    <?php
}
            ?>

