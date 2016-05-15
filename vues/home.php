<!-- Intro -->
    <section id="Accueil" class="one dark cover">
        <div class="container">
                <header>
                    <h2>Accueil</h2>
                </header>
        </div>
    </section>

<section> 
        <body> 
            <section>
                <div class="principale_div2"> 
        <?php
        $nbNouvelle = 0;  
        foreach ($lesNouvelles as $nouvelle){
        if ($nbNouvelle <=2){     
        ?>
            
             <a href="index.php?routeur=home&action=getOne&id=<?=$nouvelle["num_nouvelle"]?>">
                <div class="secondaire_div2">
                    <div class="images"><img src="images/lycee.jpeg" Alt=""/></div>
                    <p class="txt_nouvelle"><?php echo $nouvelle["titre_nouvelle"]?></p>
                    <p class="txt_nouvelle"><?php echo $nouvelle["description_nouvelle"]?></p>
                </div> 
             </a>
            <?php $nbNouvelle = $nbNouvelle + 1; ?> 
            
            <?php
        }  
        }
        ?>  </div> 
        </section>
        <div>
            <a href="index.php?routeur=home&action=getAll"><button type="button" class="btn btn-primary">Voir plus</button>    
        </div>
        </body> 
       
</section>
            