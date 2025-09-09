<?php
    require_once 'partials/head.php';
    require_once 'data.php';
    // je vérifie que j'ai un truc dans le get
    //var_dump($_GET);
    function getHeros($id, $tab){

        foreach($tab as $value){

            if($id == $value['id']){
                return $value;
            }

        }
        return null;
    };
    //Si dans le get j'ai un id alors
    if(isset($_GET['id'])){
        $id = htmlspecialchars($_GET['id']);
                $result = getHeros($id, $heros);
        //var_dump($result);
        if($result !== NULL){
            echo "<h1>" . $result['name'] . "</h1>";
        } else{
            echo "<h1>Aucun hero trouvé !</h1>";
        }


    }else{
        echo "<p>Erreur</p>";
    };
    
    require_once 'partials/footer.php';