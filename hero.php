<?php
    require_once 'partials/head.php';
    require_once 'data.php';
    // je vérifie que j'ai un truc dans le get
    //var_dump($_GET);

    //Si dans le get j'ai un id alors
    if(isset($_GET['id'])){
        $id = htmlspecialchars($_GET['id']);

        foreach($heros as $hero){

            if($id == $hero['id']){
                //var_dump($hero);
                ?>
                <h1><?= $hero['name']?></h1>
                <?php
            }else{
                return "<p>Hero non trouvé</p>";
            }
        }

    }else{
        echo "<p>Erreur</p>";
    };
    
    require_once 'partials/footer.php';