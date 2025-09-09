<?php
    require_once 'partials/head.php';
    require_once 'data.php';
    //var_dump($heros);
?>
    <h1>good evening and welcome</h1>
    <div class="container-fluid my-5">
        <div class="row justify-content-between">
            <?php
            if($heros){
                foreach($heros as $value){
                    //var_dump($value['name']);
                    //var_dump($value['picture']);                    
                    ?>
                        <div style="width: 21rem;">
                            <img class="card-img-top" src="public/img/<?= $value['picture'] ?>" alt="Image de <?php echo $value['name'] ?>">
                            <h2><?= $value['name']?></h2>
                            <a href="hero.php?id=<?= $value['id']?>" class="btn btn-danger">if you want more bring out the fire +</a>
                            <form method="post" ></div>
                    <?php
                }
            }else{
                echo "<p>Aucun personnage disponible, ils sont tous en mission.</p>";
            }   
            ?>
        </div>
            <div class="row mt-5">
        <div class="col-1"><a href="form.php" class="btn btn-warning ">Contact</a></div>            
        </div>
    </div>
<?php
    require_once 'partials/footer.php';
?>