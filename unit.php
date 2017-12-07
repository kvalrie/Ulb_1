<?php

/*Version 2.0 , Ajax fonctionnel .
écrit et réalisé par Hugo Barcelona */


require 'bdd.php';

$resultat = $bdd->query('SELECT Idunite, Nom FROM ZUnite');



?>


<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="unit.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>



    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unité</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-4 d-none d-sm-block bg-light sidebar" style="overflow-y:scroll; height:100vh">
            <input id="searchunit" oninput="w3.filterHTML('#myUL', 'a', this.value)" placeholder="Votre Unité..">
            <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="trouvez votre unité"> -->

            <?php
            while($donnee = $resultat->fetch())
            {?>

                <ul class="nav flex-column" id="myUL">
                    <li class="nav-item ">

                        <a href='unit.php?unit="<?php echo $donnee[('Idunite')];?>"' data-linkunit="<?php echo $donnee[('Idunite')];?>" id="<?php echo $donnee[('Idunite')];?>" class="unit_a nav-link active"  ><?php echo htmlspecialchars($donnee['Idunite']).' '.htmlspecialchars($donnee['Nom'])?>
                        </a>
                    </li>
                </ul>
            <?php

            }
            $resultat->closeCursor();
            ?>

        </nav>
        <main role="main" id="mainunit" class="col-sm-9 ml-sm-auto col-md-4 pt-3" style="overflow-y:scroll; height:100vh">
        <?php

?>
        </main>
        <main role="main" id="mainproj" class="col-sm-9 ml-sm-auto col-md-4 pt-3" style="overflow-y:scroll; height:100vh"   >

            <?php

            ?>



        </main>
    </div>
</div>

<script src="jquery-2.2.4.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('.unit_a').click(function () {
            var link = $(this).attr('data-linkunit');
            console.log(link);
            var url = 'unity.php';
            console.log(url);
            $('#mainunit').load(url, {unit: link});
            return false;
        });

    });
// function myFunction() {
//     var input, filter, ul, li, a, i;
//     input = document.getElementById("myInput");
//     filter = input.value.toUpperCase();
//     ul = document.getElementById("myUL");
//     li = ul.getElementsByTagName("li");
//     for (i = 0; i < li.length; i++) {
//         a = li[i].getElementsByTagName("a")[0];
//         if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
//             li[i].style.display = "";
//         } else {
//             li[i].style.display = "none";

//         }
//     }


</script>




</body>
</html>
